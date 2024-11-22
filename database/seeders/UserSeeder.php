<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            //admin
           ['name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('111'),
            'role'  =>'admin',
            'created_at' => Carbon::now(),
            'email_verified_at' => Carbon::now(),
           ],
            //User
            ['name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('111'),
                'role'  =>'user',
                'created_at' => Carbon::now(),
                'email_verified_at' => Carbon::now(),
            ]

        ]);
    }
}
