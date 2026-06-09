<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Mengubah data seeder menjadi akun User/Klien biasa
        User::factory()->create([
            'name' => 'User Nusantara',
            'email' => 'user@arsip.id',
            'password' => Hash::make('password123'),
        ]);
    }
}