<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gateway;
use App\Models\Group;
use App\Models\Setting;
use App\Models\Slab;
use App\Models\Team;
use App\Models\Type;
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
            'name' => 'Administrator',
            'username' => 'admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('asdfasdf'),
        ]);

        User::factory()->create([
            'name' => 'Abid Ali',
            'username' => 'abid',
            'email' => 'abid@gmail.com',
            'password' => Hash::make('asdfasdf'),
        ]);

        User::factory()->create([
            'name' => 'Shakeel',
            'username' => 'shakeel',
            'email' => 'shakeel@gmail.com',
            'password' => Hash::make('asdfasdf'),
        ]);

        User::factory()->create([
            'name' => 'Atif',
            'username' => 'atif',
            'email' => 'atif@gmail.com',
            'password' => Hash::make('asdfasdf'),
        ]);

        Setting::factory()->create([
            'key' => 'withdraw_fees',
            'value' => 2,
        ]);

        Type::factory()->create([
            'value' => 'Office Expense',
        ]);

        Type::factory()->create([
            'value' => 'Business Expense',
        ]);
    }
}
