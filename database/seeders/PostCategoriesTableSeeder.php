<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('post_categories')->delete();
        
        \DB::table('post_categories')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'Choisir',
                'order' => '1',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'Naviguer',
                'order' => '4',
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'Visites & Videos',
                'order' => '7',
            ),
            3 => 
            array (
                'id' => '4',
                'name' => 'Entretenir & réparer',
                'order' => '3',
            ),
            4 => 
            array (
                'id' => '5',
                'name' => 'Technologie',
                'order' => '5',
            ),
            5 => 
            array (
                'id' => '6',
                'name' => 'Monter & Régler',
                'order' => '2',
            ),
            6 => 
            array (
                'id' => '7',
                'name' => 'Evènements',
                'order' => '6',
            ),
            7 => 
            array (
                'id' => '8',
                'name' => 'Spots',
                'order' => '8',
            ),
        ));
        
        
    }
}