<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
       {
           User::factory()->create([
               'name' => 'Admin Nusantara',
               'email' => 'admin@arsip.id',
               'password' => Hash::make('password123'),
           ]);
       }
}
