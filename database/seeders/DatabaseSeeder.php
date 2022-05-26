<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'firstname'  => 'Administrator',
            'email' => 'diangraha@gmail.com',
            'password' => bcrypt('12345'),
            'dob' => '1998-06-24',
            'birth' => 'Bali',
            'sex' => 'male',
            'religion' => 'moesliem',
            'maritalstatus' => 'married',
            'nationality' => 'indonesia',
            'permanentaddress' => 'Jalan Tegal Binangun',
            'corresponaddress' =>  'Jalan Tegal Binangun',
            'mobilenumber' => '08121212',
            'level' => 'admin'
        ]);

        User::create([
            'firstname'  => 'Editor',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('12345'),
            'dob' => '1998-06-24',
            'birth' => 'Bali',
            'sex' => 'male',
            'religion' => 'moesliem',
            'maritalstatus' => 'married',
            'nationality'=> 'indonesia',
            'permanentaddress' => 'Jalan Kanca',
            'corresponaddress' =>  'Jalan kanca ',
            'mobilenumber' => '0812121212',
            'level' => 'editor'
        ]);

        User::create([
            'firstname'  => 'Yuliana',
            'email' => 'admin3@gmail.com',
            'password' => bcrypt('12345'),
            'dob' => '1998-06-24',
            'birth' => 'Palembang',
            'sex' => 'male',
            'religion' => 'moesliem',
            'maritalstatus' => 'married',
            'nationality' => 'indonesia',
            'permanentaddress' => 'Jalan Tegal Binangun',
            'corresponaddress' =>  'Jalan Tegal Binangun',
            'mobilenumber' => '0812121212',
            'level' => 'employee'
        ]);
    }
}
