<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'SuperAdmin',
                'email' => 'info@glissattitude.com',
                'email_verified_at' => '2020-01-01 00:00:00',
                'password' => '$2y$10$Qy.UROfMdVwkZKQlopVjWOapcHwDxLeLIG.4z7E.AJ7C0x2nv7b8e',
                'roles' => '["ROLE_ADMIN"]',
                'avatar_path' => '7upGjIJxMgWtJD68IiA5OIITQUBKvdPBF0XTW9qM.jpg',
                'prefered_spots' => 'La Ciotat',
                'discipline_start' => '2015-05-10 00:00:00',
                'personal_equipment' => '<p>Flotteurs : Horue Airtime 125, Starboard Foil 144, Tabou Airide 145, Zeeko Airwave, Exocet RF 81</p>
<p>Foils : F4 2020, Iris X, Starboard Carbon 95, GA Mach 1, Loke LK1, Taaroa Noe 97 UHM</p>
<p>Voiles : Severne Hyperglide 2 9m, Phantom Iris X 5.8</p>
<p>Wisbone : AL360 RTE</p>',
                'postal_code' => '13011',
                'weight' => 78,
                'remember_token' => 'RTJN0XqvNuV38OfbqEctoqgweutlH749lhoo2EdkkCrSSQqOnNnjBzQfmGPj',
                'created_at' => '2020-01-01 00:00:00',
                'updated_at' => '2020-03-18 12:31:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Contributeur',
                'email' => 'contrib@glissattitude.com',
                'email_verified_at' => '2020-01-01 00:00:00',
                'password' => '$2y$10$Qy.UROfMdVwkZKQlopVjWOapcHwDxLeLIG.4z7E.AJ7C0x2nv7b8e',
                'roles' => '["ROLE_CONTRIBUTOR"]',
                'avatar_path' => 'pMdNE5d1K15vUSrspCSQsifUqaP9TDC4RTNup7SF.jpg',
                'prefered_spots' => 'La Ciotat',
                'discipline_start' => '2015-05-10 00:00:00',
                'personal_equipment' => '<p>Flotteurs : Horue Airtime 125, Starboard Foil 144, Tabou Airide 145, Zeeko Airwave, Exocet RF 81</p>
<p>Foils : F4 2020, Iris X, Starboard Carbon 95, GA Mach 1, Loke LK1, Taaroa Noe 97 UHM</p>
<p>Voiles : Severne Hyperglide 2 9m, Phantom Iris X 5.8</p>
<p>Wisbone : AL360 RTE</p>',
                'postal_code' => '13011',
                'weight' => 78,
                'remember_token' => '6HePqNAzZPbjXEDcZ6vqzcgOd2SthPLkZfuNKiBRzlp90pzek8Elz670K8eP',
                'created_at' => '2020-01-01 00:00:00',
                'updated_at' => '2020-03-18 12:31:19',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Administrateur',
                'email' => 'admin@glissattitude.com',
                'email_verified_at' => '2020-01-01 00:00:00',
                'password' => '$2y$10$Qy.UROfMdVwkZKQlopVjWOapcHwDxLeLIG.4z7E.AJ7C0x2nv7b8e',
                'roles' => '["ROLE_ADMIN"]',
                'avatar_path' => 'pMdNE5d1K15vUSrspCSQsifUqaP9TDC4RTNup7SF.jpg',
                'prefered_spots' => 'La Ciotat',
                'discipline_start' => '2015-05-10 00:00:00',
                'personal_equipment' => '<p>Flotteurs : Horue Airtime 125, Starboard Foil 144, Tabou Airide 145, Zeeko Airwave, Exocet RF 81</p>
<p>Foils : F4 2020, Iris X, Starboard Carbon 95, GA Mach 1, Loke LK1, Taaroa Noe 97 UHM</p>
<p>Voiles : Severne Hyperglide 2 9m, Phantom Iris X 5.8</p>
<p>Wisbone : AL360 RTE</p>',
                'postal_code' => '13011',
                'weight' => 78,
                'remember_token' => 'EMLQKnrkcfQUYuB5QddXSHe8HGh2I0dfvF7juRcoimYEtGSc6L5EZCQqKrB3',
                'created_at' => '2020-01-01 00:00:00',
                'updated_at' => '2020-03-18 12:31:19',
            ),
        ));
        
        
    }
}