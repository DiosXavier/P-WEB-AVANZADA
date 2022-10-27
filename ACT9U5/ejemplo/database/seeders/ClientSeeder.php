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
        $client = new Client();
        $client->name="Xavier";
        $client->phone_number="6121000000";
        $client->email="jeju_19@alu.uabcs.mx";
        $client->save();

        $client = new Client();
        $client->name="Jesus";
        $client->phone_number="6121000000";
        $client->email="jeje_69@alu.uabcs.mx";
        $client->save();
    }
}
