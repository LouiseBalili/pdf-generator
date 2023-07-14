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
        Client::factory(30)->create();

        $client = [
            [
                'last_name' => 'Balili',
                'first_name' => 'Louise Demean',
                'middle_name' => 'Villanueva',
                'phone_number' => '09993138692',
                'address' => 'Ilijan Norte, Tubigon, Bohol.',
                'birth_date' => '2000-09-09',
                'email' => 'balililouisedemean@gmail.com',
                'initial_deposit' => 5000,
            ],
        ];

        foreach($client as $c) {
            Client::create($c);
        }
    }
}
