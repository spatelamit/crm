<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => Str::random(6),
            'full_name' => Str::random(10),
            'email' => Str::random(8).'@gmail.com',
            'contact' => Str::random(10),
            'password' => Str::random(6),
            'dob' => date("Y-m-d", rand( strtotime("Jan 01 1990"), strtotime("Dec 31 2000") ) ),
        ]);
    }
}
