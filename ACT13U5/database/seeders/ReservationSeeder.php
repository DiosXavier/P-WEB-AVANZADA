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
        $res->client_card = '2121-1234-0000-4321';
        $res->save();
 
        $res = new Reservation();
        $res->room_id = '2';
        $res->client_card = '6969-6969-1111-2222';
        $res->save();


        $res = new Reservation();
        $res->room_id = '3';
        $res->client_card = '3223-5423-2222-1111';
        $res->save();
    }
}
