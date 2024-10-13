<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
use Database\Factories\BlogFactory;
use Database\Factories\CommentFactory;
use Database\Factories\TicketFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'test@example.com',
            'password' => 'admin',
            'role' => 'superadmin',
        ]);

        // TicketFactory::new()->count(50)->create();
        // BlogFactory::new()->count(25)->create();
        // CommentFactory::new()->count(100)->create();
    }
}
