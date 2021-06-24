<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'kep',
            'email' => 'kep@gmail.com',
            'password' => '123123123',
            'address' => 'Jalan Kenangan',
            'phone' => '085108510851'
        ]);
    }
}
