<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'User Api',
            'email' => 'walquiriosaraiva@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}