<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            [
                'name' => 'John Doe',
                'username' => 'johndoe',
                'email' => 'johndoe@example.com', 
                'password' => Hash::make('12345678'), 
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Jane Smith',
                'username' => 'janesmith',
                'email' => null, 
                'password' => Hash::make('12345678'),
                'email_verified_at' => null,
                'remember_token' => Str::random(10),
            ],
        ]);
    }
}
