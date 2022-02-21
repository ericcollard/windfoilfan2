<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Foil',
                'slug' => 'foil',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Flotteur',
                'slug' => 'board',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Voile',
                'slug' => 'sail',
            ),
        ));
        
        
    }
}