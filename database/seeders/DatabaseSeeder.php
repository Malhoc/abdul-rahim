<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('public/videos');
        Storage::makeDirectory('public/blogs');

        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@123@hadeestube.com',
            'password' => Hash::make('Admin@123'),
            'role' => 'Admin'
        ]);
        User::create([
            'name' => 'Hamza Saqib',
            'email' => 'mianhamza7262@gmail.com',
            'password' => Hash::make('Hamza7262@hadeestube'),
            'role' => 'Admin'
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
