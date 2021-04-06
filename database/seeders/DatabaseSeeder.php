<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
        [
            'name' => 'John Doe',
            'email' => 'john.doe@gmail.com',
            'password' => Hash::make('password'),
        ],
        [
            'name' => 'Mary Jane',
            'email' => 'mary.jane@gmail.com',
            'password' => Hash::make('password'),
        ]
        ]);

        DB::table('posts')->insert(
        [
            [
                'title' => 'Post 1',
                'content' => 'This is post #1',
                'user_id' => 1
            ],
            [
                'title' => 'Post 2',
                'content' => 'This is post #2',
                'user_id' => 1
            ],
            [
                'title' => 'Post 3',
                'content' => 'This is post #3',
                'user_id' => 2
            ]
        ]);
    }
}
