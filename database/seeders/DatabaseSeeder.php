<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Borrow;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'owner'
        ]);
        Role::create([
            'name' => 'default role'
        ]);
        Role::create([
            'name' => 'user'
        ]);

        $roleAdmin = Role::where('name', 'owner')->first();
        $roleUser = Role::where('name', 'user')->first();

        User::create([
            'name' => 'Owner Amiw',
            'email' => 'owner@mail.com',
            'password' => Hash::make('password'),
            'role_id' => $roleAdmin->id,
            // 'email_verified_at' => Carbon::now()
        ]);
        User::create([
            'name' => 'Amiw',
            'email' => 'amiw@mail.com',
            'password' => Hash::make('111111'),
            'role_id' => $roleUser->id,
            // 'email_verified_at' => Carbon::now()
        ]);

        $this->call([
            CategorySeeder::class,
            BookSeeder::class,
            BorrowSeeder::class,
        ]);

        // Borrow::create([

        // ]);
    }
}
