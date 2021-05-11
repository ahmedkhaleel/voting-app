<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VotingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return [
            'idea_id' => $this->faker->numberBetween(1,100),
            'user_id' => $this->faker->numberBetween(1,20),
        ];
    }
}
