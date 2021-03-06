<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use App\Models\Vote;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create(
            [
                'name' => 'ahmed khaleel',
                'email' => 'info@ahmed-khaleel.net'
            ]
        );
        User::factory(19)->create();
        Status::factory()->create(['name' => 'Open','classes'=>'bg-gray-200']);
        Status::factory()->create(['name' => 'Considering','classes'=>'bg-purple text-white']);
        Status::factory()->create(['name' => 'In Progress','classes'=>'bg-yellow text-white']);
        Status::factory()->create(['name' => 'Implemented','classes'=>'bg-green text-white']);
        Status::factory()->create(['name' => 'closed','classes'=>'bg-red text-white']);
        Category::factory()->create(['name' => 'category 1']);
        Category::factory()->create(['name' => 'category 2']);
        Category::factory()->create(['name' => 'category 3']);
        Category::factory()->create(['name' => 'category 4']);
        Idea::factory(100)->create();

        foreach(range(1,20) as $user_id){
            foreach(range(1,100) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }
    }
}
