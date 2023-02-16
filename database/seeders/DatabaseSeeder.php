<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        $admin = User::create([
            'username' => 'admin',
            'fullname' => 'admin',
            'password' => bcrypt('12345678'),
            'is_active' => true
        ]);
        $admin->assignRole('admin');

        $this->call(JenisBarangSeeder::class);
        $this->call(BarangSeeder::class);
    }
}
