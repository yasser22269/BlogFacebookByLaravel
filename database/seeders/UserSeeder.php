<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
            'name'  => 'Yasser',
            'email'  => 'yasser.m22291@gmail.com',
            'password'  => bcrypt('12345678'),
       ]);
    
    }
}
