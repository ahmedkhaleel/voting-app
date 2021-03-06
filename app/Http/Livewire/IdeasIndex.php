<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\Vote;
use Livewire\Component;
use Livewire\WithPagination;


class IdeasIndex extends Component
{
use WithPagination;
        public $status ;
        public $category;

    protected $queryString = [
        'status',
        'category',


    ];
    protected $listeners = ['queryStringUpdatedStatus'];
    public function queryStringUpdatedStatus($newStatus)
    {
        $this->status = $newStatus;
        $this->resetPage();
    }
//
//    public function updatingStatus()
//    {
//        $this->resetPage();
//    }
public function mount(){
        $this->status = request()->status ?? 'All';

}

    public function updatingCategories()
    {
        $this->resetPage();
    }
    public function render()
    {
        $statuses = Status::all()->pluck('id','name');
        $categories = Category::all();
        return view('livewire.ideas-index', [
            'ideas' =>  Idea::with('user','category','status')
                ->when($this->status && $this->status !== 'All',function($query) use ($statuses) {
                    return $query->where('status_id', $statuses->get($this->status));
                })
                ->when($this->category && $this->category !== 'All Category',function($query) use ($categories) {
                    return $query->where('category_id', $categories->pluck('id','name')->get($this->category));
                })
                ->addSelect(['voted_by_user'=> Vote::select('id')
                    ->where('user_id', auth()->id())
                    ->whereColumn('idea_id','ideas.id')
                ])
                ->withCount('votes')
                ->orderByDesc('id','desc')
                ->simplePaginate(Idea::PAGINATION_COUNT),
            'categories' =>$categories,

        ]);
    }
}
