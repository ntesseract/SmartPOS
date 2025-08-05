<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Users extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin SmartPOS',
            'username' => 'adminpos',
            'email' => 'adminpos@smartpos.id',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Admin Superuser',
            'username' => 'admin',
            'email' => 'admin@smartpos.id',
            'password' => Hash::make('admin123'),
        ]);

        User::create([
            'name' => 'Operator Gudang',
            'username' => 'user',
            'email' => 'user@smartpos.id',
            'password' => Hash::make('user1234'),
        ]);
    }
}
