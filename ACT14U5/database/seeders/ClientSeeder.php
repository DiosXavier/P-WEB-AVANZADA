<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*  */
        $client = new Client();
        $client->name = 'Xavier';
        $client->email = 'jeju@uabcs.com';
        $client->phone_number = '5556126129';
        $client->save();


        $client = new Client();
        $client->name = 'Nigga';
        $client->phone_number = '6969696969';
        $client->email = 'urmmisgy.com';
        $client->save();


    }
}
