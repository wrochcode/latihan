<?php

namespace Database\Seeders;

use App\Models\Task;
// use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        $this->call([
            UsersSeeder::class,
            TasksSeeder::class
        ]);
        // collect([[
        //     'name' => 'Excel',
        //     'email' => 'excel@gmail.com',
        //     'password' => Hash::make('password'),
        //     'email_verified_at' => Carbon::now(),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ],[
        //     'name' => 'Shelby',
        //     'email' => 'shelby@gmail.com',
        //     'password' => Hash::make('password'),
        //     'email_verified_at' => Carbon::now(),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]])->each(function($user){
        //     DB::table('users')->insert($user);
        //     // User::create($user);
        // });
        
        
        // foreach($users as $user){
        //     User::create($user);
        // }

        // =====================================================================
        // User::create([
        //     'name' => 'Excel',
        //     'email' => 'excel@gmail.com',
        //     'password' => Hash::make('password'),
        //     'email_verified_at' => Carbon::now(),
        // ]);
        // =====================================================================
        
        // Task::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
