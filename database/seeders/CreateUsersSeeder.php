<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>  'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'role' => 1,
        ]);
        User::create([
            'name' =>  'Test',
            'email' => 'test@test.com',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'name' =>  'Test2',
            'email' => 'test2@test.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
