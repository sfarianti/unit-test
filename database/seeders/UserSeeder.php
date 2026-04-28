<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     DB::table('users')->insert([
    //         'name' => 'Admin baru',
    //         'email' => 'adminbaru@gmail.com',
    //         'password' => bcrypt('123456')
    //     ]);
        
    // }

    public function run(): void
    {
        User::factory()->count(10)->create();
    }
}
