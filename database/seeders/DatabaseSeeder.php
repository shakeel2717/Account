<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gateway;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Shakeel Ahmad',
            'username' => 'shakeel2717',
            'email' => 'shakeel2717@gmail.com',
            'password' => Hash::make('asdfasdf'),
        ]);


        Gateway::factory()->create([
            'name' => 'JazzCash',
            'offline' => 1,
            'icon' => 'mobilink.png',
            'title' => "Shakeel Ahmad",
            'number' => "03037702717",
            'r_number' => "03037702717",
        ]);

        Gateway::factory()->create([
            'name' => 'EasyPaisa',
            'offline' => 1,
            'icon' => 'easypaisa.png',
            'title' => "Shakeel Ahmad",
            'number' => "03457702717",
            'r_number' => "03457702717",
        ]);

        Gateway::factory()->create([
            'name' => 'Bank',
            'offline' => 1,
            'icon' => 'bank.png',
            'title' => "Shakeel Ahmad",
            'number' => "0065001005464560024",
            'r_number' => "03037702717",
        ]);

        Gateway::factory()->create([
            'name' => 'Crypto',
            'offline' => 0,
            'icon' => 'crypto.png',
        ]);
    }
}
