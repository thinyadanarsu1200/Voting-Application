<?php

namespace Database\Seeders;

use App\Models\Idea;
use App\Models\Status;
use App\Models\Category;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $change_status = Permission::create(['name' => 'change status']);
        $create_idea = Permission::create(['name' => 'create idea']);
        $show_idea = Permission::create(['name' => 'show idea']);
        $edit_idea = Permission::create(['name' => 'edit idea']);
        $delete_idea = Permission::create(['name' => 'delete idea']);

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo([ 'change status','create idea','show idea','edit idea','delete idea']);

        $idea_owner = Role::create(['name' => 'idea-owner']);
        $idea_owner->givePermissionTo(['create idea','show idea','edit idea','delete idea']);
    
        $admin_user = User::factory()->create([
            'name' => 'Ethan',
            'email' => 'ethan@gmail.com',
        ]);

        $admin_user->assignRole($admin);

        foreach(range(1,19) as $item){
            $user = User::factory()->create();
            $user->assignRole($idea_owner);
        }


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
