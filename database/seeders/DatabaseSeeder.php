<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gateway;
use App\Models\Group;
use App\Models\Slab;
use App\Models\Team;
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



        Team::factory()->create([
            'name' => 'Argentina',
            'symbol' => 'ARG',
            'icon' => 'ARG.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Australia',
            'symbol' => 'AUS',
            'icon' => 'AUS.jpg',
        ]);


        Team::factory()->create([
            'name' => 'Belgium',
            'symbol' => 'BEL',
            'icon' => 'BEL.jpg',
        ]);


        Team::factory()->create([
            'name' => 'Brazil',
            'symbol' => 'BRA',
            'icon' => 'BRA.jpg',
        ]);



        Team::factory()->create([
            'name' => 'Cameroon',
            'symbol' => 'CMR',
            'icon' => 'CMR.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Canada',
            'symbol' => 'CAN',
            'icon' => 'CAN.jpg',
        ]);
        Team::factory()->create([
            'name' => 'Costa Rica',
            'symbol' => 'CRC',
            'icon' => 'CRC.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Croatia',
            'symbol' => 'CRO',
            'icon' => 'CRO.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Denmark',
            'symbol' => 'DEN',
            'icon' => 'DEN.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Ecuador',
            'symbol' => 'ECU',
            'icon' => 'ECU.jpg',
        ]);

        Team::factory()->create([
            'name' => 'England',
            'symbol' => 'ENG',
            'icon' => 'ENG.jpg',
        ]);

        Team::factory()->create([
            'name' => 'France',
            'symbol' => 'FRA',
            'icon' => 'FRA.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Germany',
            'symbol' => 'GER',
            'icon' => 'GER.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Ghana',
            'symbol' => 'GHA',
            'icon' => 'GHA.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Iran',
            'symbol' => 'IRN',
            'icon' => 'IRN.jpg',
        ]);


        Team::factory()->create([
            'name' => 'Japan',
            'symbol' => 'JPN',
            'icon' => 'JPN.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Korea Republic',
            'symbol' => 'KOR',
            'icon' => 'KOR.jpg',
        ]);


        Team::factory()->create([
            'name' => 'Mexico',
            'symbol' => 'MEX',
            'icon' => 'MEX.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Morocco',
            'symbol' => 'MAR',
            'icon' => 'MAR.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Netherlands',
            'symbol' => 'NED',
            'icon' => 'NED.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Poland',
            'symbol' => 'POL',
            'icon' => 'POL.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Portugal',
            'symbol' => 'POR',
            'icon' => 'POR.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Qatar',
            'symbol' => 'QAT',
            'icon' => 'QAT.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Saudi Arabia',
            'symbol' => 'KSA',
            'icon' => 'KSA.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Senegal',
            'symbol' => 'SEN',
            'icon' => 'SEN.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Serbia',
            'symbol' => 'SRB',
            'icon' => 'SRB.jpg',
        ]);


        Team::factory()->create([
            'name' => 'Spain',
            'symbol' => 'ESP',
            'icon' => 'ESP.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Switzerland',
            'symbol' => 'SUI',
            'icon' => 'SUI.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Tunisia',
            'symbol' => 'TUN',
            'icon' => 'TUN.jpg',
        ]);

        Team::factory()->create([
            'name' => 'United States',
            'symbol' => 'USA',
            'icon' => 'USA.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Uruguay',
            'symbol' => 'URU',
            'icon' => 'URU.jpg',
        ]);

        Team::factory()->create([
            'name' => 'Wales',
            'symbol' => 'WAL',
            'icon' => 'WAL.jpg',
        ]);

        Group::factory()->create([
            'first' => 20,
            'second' => 30,
        ]);


        Group::factory()->create([
            'first' => 1,
            'second' => 2,
        ]);

        Group::factory()->create([
            'first' => 16,
            'second' => 8,
        ]);

        Group::factory()->create([
            'first' => 4,
            'second' => 17,
        ]);

        Group::factory()->create([
            'first' => 11,
            'second' => 25,
        ]);

        Group::factory()->create([
            'first' => 12,
            'second' => 21,
        ]);

        Group::factory()->create([
            'first' => 19,
            'second' => 27,
        ]);


        Group::factory()->create([
            'first' => 22,
            'second' => 28,
        ]);


        Group::factory()->create([
            'first' => 11,
            'second' => 12,
        ]);


        Group::factory()->create([
            'first' => 19,
            'second' => 22,
        ]);


        Group::factory()->create([
            'first' => 20,
            'second' => 1,
        ]);


        Group::factory()->create([
            'first' => 8,
            'second' => 4,
        ]);


        Group::factory()->create([
            'first' => 1,
            'second' => 4,
        ]);


        Slab::factory()->create([
            'group_id' => 1,
            'score' => "0 : 0",
            'odds' => 1.82,
        ]);

        Slab::factory()->create([
            'group_id' => 1,
            'score' => "0 : 1",
            'odds' => 3.1,
        ]);

        Slab::factory()->create([
            'group_id' => 1,
            'score' => "0 : 2",
            'odds' => 5.56,
        ]);

        Slab::factory()->create([
            'group_id' => 1,
            'score' => "0 : 3",
            'odds' => 7.54,
        ]);

        Slab::factory()->create([
            'group_id' => 1,
            'score' => "1 : 0",
            'odds' => 0.79,
        ]);

        Slab::factory()->create([
            'group_id' => 1,
            'score' => "1 : 1",
            'odds' => 1.82,
        ]);

        Slab::factory()->create([
            'group_id' => 1,
            'score' => "1 : 2",
            'odds' => 2.52,
        ]);

        Slab::factory()->create([
            'group_id' => 1,
            'score' => "1 : 3",
            'odds' => 3.1,
        ]);

        Slab::factory()->create([
            'group_id' => 1,
            'score' => "2 : 0",
            'odds' => 0.65,
        ]);

        Slab::factory()->create([
            'group_id' => 1,
            'score' => "2 : 1",
            'odds' => 0.79,
        ]);

        Slab::factory()->create([
            'group_id' => 1,
            'score' => "2 : 2",
            'odds' => 1.28,
        ]);

        Slab::factory()->create([
            'group_id' => 1,
            'score' => "2 : 3",
            'odds' => 1.28,
        ]);

        Slab::factory()->create([
            'group_id' => 1,
            'score' => "3 : 0",
            'odds' => 0.65,
        ]);

        Slab::factory()->create([
            'group_id' => 1,
            'score' => "3 : 1",
            'odds' => 0.65,
        ]);

        Slab::factory()->create([
            'group_id' => 1,
            'score' => "3 : 2",
            'odds' => 0.65,
        ]);


        Slab::factory()->create([
            'group_id' => 1,
            'score' => "3 : 3",
            'odds' => 0.65,
        ]);


        Slab::factory()->create([
            'group_id' => 1,
            'score' => "4 : 4",
            'odds' => 0.81,
        ]);
    }
}
