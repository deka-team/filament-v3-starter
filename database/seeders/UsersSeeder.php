<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if ($this->command->confirm('truncate first ?')) {
            User::truncate();
        }

        User::firstOrCreate([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'superadmin@starter.com',
            'email_verified_at' => now(),
            'password' => bcrypt('filament-starter'),
        ]);
    }
}
