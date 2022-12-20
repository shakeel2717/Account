<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\Gateway;
use App\Models\Group;
use App\Models\Setting;
use App\Models\Slab;
use App\Models\Team;
use App\Models\Type;
use App\Models\User;
use App\Models\VisaProfit;
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

        Customer::factory()->create([
            'type' => 'partner',
            'name' => 'Abid',
            'Phone' => "+1212121212",
            'address' => "Pakistan",
        ]);

        Customer::factory()->create([
            'type' => 'partner',
            'name' => 'Shakeel',
            'Phone' => "+1212121212",
            'address' => "Pakistan",
        ]);

        Customer::factory()->create([
            'type' => 'partner',
            'name' => 'Atif',
            'Phone' => "+1212121212",
            'address' => "Pakistan",
        ]);

        Customer::factory()->create([
            'type' => 'partner',
            'name' => 'Donation',
            'Phone' => "+1212121212",
            'address' => "Pakistan",
        ]);


        Setting::factory()->create([
            'key' => 'withdraw_fees',
            'value' => 2,
        ]);

        Type::factory()->create([
            'value' => 'Company Expense',
        ]);

        Type::factory()->create([
            'value' => 'Company Invest',
        ]);

        Type::factory()->create([
            'value' => 'Daily Office Expense',
        ]);

        Type::factory()->create([
            'value' => 'Vehicle Expense',
        ]);

        Type::factory()->create([
            'value' => 'Fuel Expense ',
        ]);

        Type::factory()->create([
            'value' => 'Office Cleaner',
        ]);

        Type::factory()->create([
            'value' => 'Office Internet',
        ]);

        Type::factory()->create([
            'value' => 'Transport',
        ]);

        Type::factory()->create([
            'value' => 'Donation',
        ]);

        Type::factory()->create([
            'value' => 'Restaurant Expense',
        ]);

        Type::factory()->create([
            'value' => 'Office Lunch',
        ]);

        Type::factory()->create([
            'value' => 'Office Rental 3M',
        ]);

        Type::factory()->create([
            'value' => 'Partners Share',
        ]);


        VisaProfit::factory()->create([
            'customer_id' => 1,
            'amount' => 30,
        ]);

        VisaProfit::factory()->create([
            'customer_id' => 2,
            'amount' => 30,
        ]);

        VisaProfit::factory()->create([
            'customer_id' => 3,
            'amount' => 30,
        ]);

        VisaProfit::factory()->create([
            'customer_id' => 4,
            'amount' => 10,
        ]);
    }
}
