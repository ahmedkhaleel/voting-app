<?php

namespace App\Models;

use App\Exceptions\DuplicateVoteException;
use App\Exceptions\VoteNotFoundException;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory, Sluggable;

    const PAGINATION_COUNT = 10;

    protected $guarded = [];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function votes()
    {
        return $this->belongsToMany(User::class,'votes');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function isVotedForByUser(? User $user){
        if(!$user){
            return false;
        }
        return Vote::where('user_id', $user->id)
            ->where('idea_id', $this->id)
            ->exists();
    }


    public function vote(User $user){

        if ($this->isVotedForByUser($user)) {
            throw new DuplicateVoteException;
        }
        Vote::create([
            'idea_id' => $this->id,
            'user_id' => $user->id,
        ]);
    }

    public function removeVote(User $user)
    {
        $voteToDelete =   Vote::where('idea_id', $this->id)
            ->where('user_id', $user->id)
            ->first();
            if ($voteToDelete) {
                $voteToDelete->delete();
            }else{
                throw new VoteNotFoundException;
            }
    }

//    public function getStatusAttributes(){
//
//        $allstatuses =[
//            'Open'=>'bg-gray-200',
//            'Considering'=>'bg-purple text-white',
//            'In Progress'=>'bg-yellow text-white',
//            'Implemented'=>'bg-green text-white',
//            'closed'=>'bg-red  text-white',
//        ];
//        return $allstatuses[$this->status->name];
//
////        if($this->status->name == 'Open'){
////            return 'bg-gray-200';
////        }elseif ($this->status->name == 'Considering'){
////            return 'bg-purple text-white';
////        }elseif ($this->status->name == 'In Progress'){
////            return 'bg-yellow text-white';
////        }elseif ($this->status->name == 'Implemented'){
////            return 'bg-green text-white';
////        }elseif ($this->status->name == 'closed'){
////            return 'bg-red  text-white';
////        }else
////        return 'bg-gray-200';
//    }

}
