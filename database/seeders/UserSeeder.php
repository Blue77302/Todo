<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Tạo một user với quyền Admin
         User::create([

        ]);

        // Tạo một số user khác nếu cần
        User::factory(10)->create();
    }
}
