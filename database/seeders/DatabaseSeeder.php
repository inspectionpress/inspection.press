<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Ensure roles exist before assigning them
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $inspectorRole = Role::firstOrCreate(['name' => 'inspector']);
        $clientRole = Role::firstOrCreate(['name' => 'client']);

        // Create Admin User
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password123'),
            ]
        );
        $admin->assignRole($adminRole);

        // Create Inspector User
        $inspector = User::firstOrCreate(
            ['email' => 'inspector@example.com'],
            [
                'name' => 'Inspector User',
                'password' => Hash::make('password123'),
            ]
        );
        $inspector->assignRole($inspectorRole);

        // Create Client User
        $client = User::firstOrCreate(
            ['email' => 'client@example.com'],
            [
                'name' => 'Client User',
                'password' => Hash::make('password123'),
            ]
        );
        $client->assignRole($clientRole);

        $this->command->info('Admin, Inspector, and Client users created successfully.');
    }
}
