<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
                [
                    'nik'=>'2547876278',
                    'name'=>'Admin2',
                    'email'=>'admin2@gmail.com',
                    'phone'=>'0812446789',
                    'password'=>bcrypt('12345678'),
                    'roles'=>'ADMIN',
                ],

                [
                    'nik'=>'6789954689',
                    'name'=>'User21',
                    'email'=>'user21@gmail.com',
                    'phone'=>'0812458989',
                    'password'=>bcrypt('12345678'),
                    'roles'=>'USER',
                ],
            ];

            foreach($user as $key => $value) {
                User::create($value);
            }
    }
}
