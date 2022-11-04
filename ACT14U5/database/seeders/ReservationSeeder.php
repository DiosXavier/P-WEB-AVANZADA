<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;
class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $res = new Reservation();
        $res->room_id = '1';
        $res->client_id = 1;
        $res->save();
 
        $res = new Reservation();
        $res->room_id = '2';
        $res->client_id = 2;
        $res->save();
    }
}
