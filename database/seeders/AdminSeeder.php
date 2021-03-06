<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "administrator",
            "email" => "admin@gmail.com",
            "password" => bcrypt("admin123"),
            "role_id" => 1
        ]);
    }
}
