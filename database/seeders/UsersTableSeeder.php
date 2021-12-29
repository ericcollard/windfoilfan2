<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'info-glissattitude',
                    'email' => 'info@glissattitude.com',
                    'email_verified_at' => '2020-01-01 00:00:00',
                    'password' => '$2y$10$Qy.UROfMdVwkZKQlopVjWOapcHwDxLeLIG.4z7E.AJ7C0x2nv7b8e',
                    'remember_token' => 'lCbi4dCTIr5bJM2Jd3FEO1oFIdZrDgs6f5OOFIPx9CfvoP5GNG7GZQ4m00Ok',
                )));


    }
}
