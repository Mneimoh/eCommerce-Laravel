<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
            'name'=>'Nkiangmatiah Junior',
            'email'=>'juniornkiangmatiah@gmail.com',
            'password'=>Hash::make('12345')
        ],
        [
        	'name'=>'Peter Parker',
        	'email'=>'peterparker@gmail.com',
        	'password'=>Hash::make('12345')
        ]);
    }
}
