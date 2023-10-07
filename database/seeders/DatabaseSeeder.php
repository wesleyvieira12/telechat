<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'teste@teste.com',
            'password' => bcrypt('12345678')
        ]);

        $user->telegram()->create([
            'chat_id' => '388474792',
            'first_name' => 'Wesley',
            'username' => 'wesleyvieira12',
            'auth_date' => '1696649188',
            'hash' => '99e2dc2bedaadc6ac35b781961cbfa8cc6fb3d9f98238f98edfc6aed21de3bec',
        ]);

    }
}
