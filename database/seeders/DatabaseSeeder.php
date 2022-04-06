<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


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

        \App\Models\Team::factory(10)->create();

        DB::table('users')->insert([
            'name' =>  'Allan Lao',
            'email' => 'user@dict.com',
       //     'current_team_id'=>  \App\Models\Team::all('id')->random(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        DB::table('nodes')->insert([
   
                'name' => 'Tuguegarao Tower',
                'description' => '',
                'lat' => '17.58978105239867', 
                'long' => '121.71373015258862',
                'status' => 'active',
              
          
        ]);

        DB::table('nodes')->insert([
   
            'name' => 'Cauayan Tower',
            'description' => '',
            'lat' =>'16.930639295091776', 
            'long' => '121.7686837704761',
            'status' => 'active',
          
      
    ]);

    DB::table('nodes')->insert([
   
        'name' => 'Isabela Tower',
        'description' => '',
        'lat' => '16.729059936619034', 
        'long' => '121.5577878712171',
        'status' => 'active',
      
  
]);

DB::table('nodes')->insert([
   
    'name' => 'Tuguegarao Tower',
    'description' => '',
    'lat' => '17.58978105239867', 
    'long' => '121.71373015258862',
    'status' => 'active',
  

]);

DB::table('nodes')->insert([
   
    'name' => 'Roxas Tower',
    'description' => '',
    'lat' => '17.129413293813396', 
    'long' => '121.61431703612028',
    'status' => 'active',
  

]);

DB::table('nodes')->insert([
   
    'name' => 'Gamu Tower',
    'description' => '',
    'lat' => '17.06885760403857', 
    'long' => '121.80364702630501',
    'status' => 'active',
  

]);

        

    }
}
