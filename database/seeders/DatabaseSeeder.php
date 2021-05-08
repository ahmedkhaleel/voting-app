<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
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


        Status::factory()->create(['name' => 'Open','classes'=>'bg-gray-200']);
        Status::factory()->create(['name' => 'Considering','classes'=>'bg-purple text-white']);
        Status::factory()->create(['name' => 'In Progress','classes'=>'bg-yellow text-white']);
        Status::factory()->create(['name' => 'Implemented','classes'=>'bg-green text-white']);
        Status::factory()->create(['name' => 'closed','classes'=>'bg-red text-white']);
        Category::factory()->create(['name' => 'category 1']);
        Category::factory()->create(['name' => 'category 2']);
        Category::factory()->create(['name' => 'category 3']);
        Category::factory()->create(['name' => 'category 4']);
        Idea::factory(30)->create();
    }
}
