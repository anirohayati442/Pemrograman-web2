<?php

namespace Database\Seeders;
use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //buat 1 akun
        user::create([
            'name'=>'Admin Canteek.Style',
            'email'=>'admin@canteekstyle.com',
            'password'=>Hash::make('admin1122'),
        ]);
    }
}
