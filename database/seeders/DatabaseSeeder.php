<?php

namespace Database\Seeders;

use App\Models\Idea;
use App\Models\Status;
use App\Models\Category;
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
        User::factory()->create([
            'name' => 'Ethan',
            'email' => 'ethan@gmail.com',
        ]);

        User::factory(19)->create();

        // \App\Models\User::factory(10)->create();
        Category::factory()->create(['name' => 'Category1']);
        Category::factory()->create(['name' => 'Category2']);
        Category::factory()->create(['name' => 'Category3']);
        Category::factory()->create(['name' => 'Category4']);

        // Status::factory()->create(['name' => 'Open','classes'=> 'bg-gray-200']);
        // Status::factory()->create(['name' => 'Considering','classes'=> 'bg-purple text-white']);
        // Status::factory()->create(['name' => 'In Progress','classes'=> 'bg-yellow text-white']);
        // Status::factory()->create(['name' => 'Implemented','classes'=> 'bg-green text-white']);
        // Status::factory()->create(['name' => 'Closed','classes'=> 'bg-red text-white']);

        Status::factory()->create(['name' => 'Open']);
        Status::factory()->create(['name' => 'Considering']);
        Status::factory()->create(['name' => 'In Progress']);
        Status::factory()->create(['name' => 'Implemented']);
        Status::factory()->create(['name' => 'Closed']);

        foreach(range(1,100) as $item){
            if($item % 2 == 0){
                Idea::factory()->create([
                    'votes_count' => 20,
                ]);
            }else{
                Idea::factory()->create([
                    'votes_count' => 0,
                ]);
            }
        }

        foreach(range(1,20) as $user_id){
            foreach(range(1,100) as $idea_id){
                if($idea_id % 2 == 0){
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }


    }
}
