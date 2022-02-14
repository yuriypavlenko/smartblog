<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@smartblog.com',
            'password' => Hash::make('12345678'),
            'user_type' => 0 //user, viewer
        ]);

        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@smartblog.com',
            'password' => Hash::make('12345678'),
            'user_type' => 1 //administrator
        ]);

        DB::table('users')->insert([
            'name' => 'Writer',
            'email' => 'writer@smartblog.com',
            'password' => Hash::make('12345678'),
            'user_type' => 2 //creator, author of post
        ]);
    }
}
