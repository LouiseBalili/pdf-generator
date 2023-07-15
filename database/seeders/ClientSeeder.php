<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = [
            [
                'last_name' => 'Balili',
                'first_name' => 'Louise Demean',
                'middle_name' => 'Villanueva',
                'phone_number' => '09993138692',
                'address' => 'Ilijan Norte, Tubigon, Bohol',
                'birth_date' => '2000-09-09',
                'email' => 'balililouisedemean@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Balili',
                'first_name' => 'Glory Ann',
                'middle_name' => 'Villanueva',
                'phone_number' => '09214301496',
                'address' => 'Ilijan Norte, Tubigon, Bohol',
                'birth_date' => '1997-07-14',
                'email' => 'gee.ann.balili@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Balili',
                'first_name' => 'Glorecita',
                'middle_name' => 'Villanueva',
                'phone_number' => '09993138692',
                'address' => 'Ilijan Norte, Tubigon, Bohol',
                'birth_date' => '1964-07-31',
                'email' => 'balili.glorecita@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Israel',
                'first_name' => 'Achilles Isidore',
                'middle_name' => 'A.',
                'phone_number' => '09298001040',
                'address' => 'Tagbilaran City, Bohol',
                'birth_date' => '1997-08-18',
                'email' => 'achilleszisrael@su.edu.ph',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Reid',
                'first_name' => 'Robert James',
                'middle_name' => 'Marquinez',
                'phone_number' => '09110469633',
                'address' => 'Los Angeles, California',
                'birth_date' => '1993-05-11',
                'email' => 'robertjreid27@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Balili',
                'first_name' => 'Glory Ann',
                'middle_name' => 'Villanueva',
                'phone_number' => '09214301496',
                'address' => 'Ilijan Norte, Tubigon, Bohol',
                'birth_date' => '1997-07-14',
                'email' => 'balili.glory.ann@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Balili',
                'first_name' => 'Glory Ann',
                'middle_name' => 'Villanueva',
                'phone_number' => '09214301496',
                'address' => 'Ilijan Norte, Tubigon, Bohol',
                'birth_date' => '1997-07-14',
                'email' => 'yuji01727@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Jamodiong',
                'first_name' => 'Carl Angelo',
                'middle_name' => 'B.',
                'phone_number' => '09267527519',
                'address' => 'Tagbilaran City, Bohol',
                'birth_date' => '2000-12-01',
                'email' => 'jamodiongcarlangelo@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Calunia',
                'first_name' => 'Lester',
                'middle_name' => 'Cosinero',
                'phone_number' => '09987453645',
                'address' => 'Guiwanon, Tubigon, Bohol.',
                'birth_date' => '2002-07-05',
                'email' => 'calunialester7@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Sereno',
                'first_name' => 'Mareyl Doreen',
                'middle_name' => 'C.',
                'phone_number' => '09674523133',
                'address' => 'Tagbilaran City, Bohol',
                'birth_date' => '1997-05-09',
                'email' => 'Mareyldoreen@yahoo.com',
                'initial_deposit' => 50000,
            ],
        ];

        foreach($client as $c) {
            Client::create($c);
        }
    }
}
