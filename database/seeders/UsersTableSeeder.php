<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'Darwin Yamyamin',
            'address'   => 'Bulacao',
            //'Age'        => '21',
            'email'     => 'dbyamyamin@gmail.com',
            'email_verified_at' => '2020-12-19 10:52:53',
            'password'  => 'darwinSS1999',
            //'status'    => '1',
            //'type'      => '1',
        ]);
    }
}
