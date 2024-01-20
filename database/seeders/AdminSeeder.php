<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo seed cho Admin
        Admin::create([
            'first_name' => 'Admin',
            'last_name' => 'Super',
            'email' => 'superadmin@khgc.com',
            'address' => '123 Street, City',
            'password' => bcrypt('Abcd@1234'),
            'is_admin' => true,
        ]);
    }
}
