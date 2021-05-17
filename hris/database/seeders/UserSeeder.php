<?php

namespace Database\Seeders;

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
            'first_name' => 'Eldrin',
            'middle_name' => 'Valdez',
            'last_name' => 'Bradecina',
            'email' => 'khairo.smile@gmail.com',
            'password' => Hash::make('Playtime14!'),
        ]);
    }
}
