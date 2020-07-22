<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'firstname' => "Bosco",
            'secondname' => "Waisana",
            'type' => "Admin",
            'gender' => "male",
            'contact' => "0770000000",
            'email' => "bosco@gmail.com",
            'password' => Hash::make('password'),
            'status' => "no",
            'image' => "default"
        ]);
    }
}
