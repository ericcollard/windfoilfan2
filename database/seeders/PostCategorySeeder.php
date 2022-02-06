<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('post_categories')->delete();
        \DB::table('post_categories')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Classements',
                    'order' => '1',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Visites',
                    'order' => '1',
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Pratique',
                    'order' => '2',
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Mise en oeuvre',
                    'order' => '3',
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Technologie',
                    'order' => '4',
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Réglages',
                    'order' => '5',
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Events',
                    'order' => '6',
                ),
        ));
    }
}
