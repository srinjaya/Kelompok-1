<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@example.com',
               'role'=>'admin',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Pegawai',
               'email'=>'pegawai@example.com',
               'role'=>'pegawai',
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        } //
    }
}
