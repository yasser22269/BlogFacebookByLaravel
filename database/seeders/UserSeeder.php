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
            'avatar'  => null,
            'cover_photo'  => null,
            'user_name'  => 'yasser22291',
            'email'  => 'yasser.m22291@gmail.com',
            'password'  => bcrypt('12345678'),
       ]);

       DB::table('users')->insert([
        'name'  => 'Yasser2',
        'avatar'  => null,
        'cover_photo'  => null,
        'user_name'  => 'yasser22269',
        'email'  => 'yasser.m22269@gmail.com',
        'password'  => bcrypt('12345678'),
   ]);
       
    }
}
