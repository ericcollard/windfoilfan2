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
                'id' => 1,
                'name' => 'Nos sélections produit',
                'order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Tutos navigation',
                'order' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Visites fabriquants',
                'order' => 7,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mise en oeuvre & bricolage',
                'order' => 3,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Technologie',
                'order' => 4,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Réglages',
                'order' => 5,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Evènements',
                'order' => 6,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Spots',
                'order' => 8,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Videos',
                'order' => 9,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Choix du matériel ',
                'order' => 2,
            ),
        ));
        
        
    }
}