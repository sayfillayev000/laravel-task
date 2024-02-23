<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
       User::create([
        'role_id' => 1,
        'name' => 'Manager',
        'email' => 'manager@gmail.com',
        'password' => Hash::make('password')
       ]);

       User::create([
        'role_id' => 2,
        'name' => 'Client',
        'email' => 'client@gmail.com',
        'password' => Hash::make('password')
       ]);
    }
}
