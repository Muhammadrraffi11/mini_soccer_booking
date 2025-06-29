<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Field;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'no_hp' => '123456789',
            'password' => Hash::make('amir123'),
            'role' => 'user',
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'no_hp' => '08123456789',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'amirKehed',
            'email' => 'amir@mail.com',
            'no_hp' => '123456789',
            'password' => Hash::make('amir123'),
            'role' => 'user',
        ]);
        // Tambahkan data lapangan
        Field::create([
            'name' => 'Lapangan 1',
            'description' => 'Lapangan rumput sintetis standar mini soccer',
        ]);

        Field::create([
            'name' => 'Lapangan 2',
            'description' => 'Lapangan rumput alami dengan pencahayaan malam',
        ]);

    }
}
