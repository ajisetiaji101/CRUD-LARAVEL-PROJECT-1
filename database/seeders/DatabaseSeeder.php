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
            'email' => 'aji@gmail.com',
            'password' => bcrypt('12345'),
            'dob' => '1998-06-24',
            'birth' => 'Palembang',
            'sex' => 'male',
            'religion' => 'moesliem',
            'maritalstatus' => 'married',
            'nationality' => 'indonesia',
            'permanentaddress' => 'Jalan Tegal Binangun',
            'corresponaddress' =>  'Jalan Tegal Binangun',
            'mobilenumber' => '089696485152',
            'level' => 'admin'
        ]);

        User::create([
            'firstname'  => 'Editor',
            'email' => 'yuli@gmail.com',
            'password' => bcrypt('12345'),
            'dob' => '1998-06-24',
            'birth' => 'Palembang',
            'sex' => 'male',
            'religion' => 'moesliem',
            'maritalstatus' => 'married',
            'nationality'
             => 'indonesia',
            'permanentaddress' => 'Jalan Tegal Binangun',
            'corresponaddress' =>  'Jalan Tegal Binangun',
            'mobilenumber' => '089696485152',
            'level' => 'editor'
        ]);

        User::create([
            'firstname'  => 'Yuliana',
            'email' => 'yuliana@gmail.com',
            'password' => bcrypt('12345'),
            'dob' => '1998-06-24',
            'birth' => 'Palembang',
            'sex' => 'male',
            'religion' => 'moesliem',
            'maritalstatus' => 'married',
            'nationality'
             => 'indonesia',
            'permanentaddress' => 'Jalan Tegal Binangun',
            'corresponaddress' =>  'Jalan Tegal Binangun',
            'mobilenumber' => '089696485152',
            'level' => 'employee'
        ]);
    }
}
