<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Emma",
            "password" => Hash::make("123")
        ]);
        User::create([
            "name" => "Mame",
            "password" => Hash::make("123")
        ]);
        User::create([
            "name" => "Amme",
            "password" => Hash::make("123")
        ]);
    }
}
