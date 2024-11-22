<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $obj = new Admin();
        $obj->name = 'Noppadol';
        $obj->username = 'nop';
        $obj->email = 'riyasarn.n@gmail.com';
        $obj->password = Hash::make('111');
        $obj->created_at = Carbon::now();
        $obj->email_verified_at = Carbon::now();
        $obj->save();

//        DB::table('admins')->insert([
//           'name' => 'Noppadol',
//           'username' => 'nop',
//            'password' => Hash::make('111'),
//            'created_at' => Carbon::now(),
//            'updated_at' => Carbon::now(),
//            'email_verified_at' => Carbon::now(),
//            'token' =>
//        ]);
    }
}
