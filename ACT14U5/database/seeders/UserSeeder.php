<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'joel',
            'email' => 'crve_19@alu.uabcs.mx',
            'password' => Hash::make('password'),
        ]);
     /*     $user = new User();
         $user->name = 'joel';
         $user->email = 'joel@mail.com';
         $user->password = 'dasfsdgfhgfas';
         $user->save(); */
    }
}
