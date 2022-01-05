<?php

namespace Database\Seeders;

use App\Models\User;
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
                    'name' => 'Info Glissattitude',
                    'email' => 'info@glissattitude.com',
                    'email_verified_at' => '2020-01-01 00:00:00',
                    'password' => '$2y$10$Qy.UROfMdVwkZKQlopVjWOapcHwDxLeLIG.4z7E.AJ7C0x2nv7b8e',
                    'remember_token' => 'lCbi4dCTIr5bJM2Jd3FEO1oFIdZrDgs6f5OOFIPx9CfvoP5GNG7GZQ4m00Ok',
                    'roles' => '["ROLE_ADMIN"]',
                    'avatar_path' => 'JkG1ZzUdXlkvOs77HIGUtfUjOpReEy6ksccYtJuC.jpeg',
                    'prefered_spots' => 'La Ciotat',
                    'discipline_start' => '2015-05-10 00:00:00',
                    'personal_equipment' => '<p>Flotteurs : Horue Airtime 125, Starboard Foil 144, Tabou Airide 145, Zeeko Airwave, Exocet RF 81</p>
<p>Foils : F4 2020, Iris X, Starboard Carbon 95, GA Mach 1, Loke LK1, Taaroa Noe 97 UHM</p>
<p>Voiles : Severne Hyperglide 2 9m, Phantom Iris X 5.8</p>
<p>Wisbone : AL360 RTE</p>',
                    'postal_code' => '13011',
                    'weight' => 78,
                    'created_at' => '2020-01-01 00:00:00',
                    'updated_at' => '2020-03-18 12:31:19',
                )));


        User::factory()->count(50)->create();

    }
}
