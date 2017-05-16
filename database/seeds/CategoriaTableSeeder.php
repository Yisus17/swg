<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categoria')->delete();
        
        \DB::table('categoria')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion_categoria' => 'Whisky',
                'created_at' => '2017-03-31 03:36:35',
                'updated_at' => '2017-03-31 03:36:35',
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion_categoria' => 'Vodka',
                'created_at' => '2017-03-31 03:37:23',
                'updated_at' => '2017-03-31 03:37:23',
            ),
            2 => 
            array (
                'id' => 3,
                'descripcion_categoria' => 'Rones',
                'created_at' => '2017-03-31 03:37:31',
                'updated_at' => '2017-03-31 03:37:31',
            ),
            3 => 
            array (
                'id' => 4,
                'descripcion_categoria' => 'Vinos',
                'created_at' => '2017-03-31 03:37:40',
                'updated_at' => '2017-03-31 03:37:40',
            ),
            4 => 
            array (
                'id' => 5,
                'descripcion_categoria' => 'Cerveza',
                'created_at' => '2017-03-31 03:37:49',
                'updated_at' => '2017-03-31 03:37:49',
            ),
            5 => 
            array (
                'id' => 6,
                'descripcion_categoria' => 'Espirituosos',
                'created_at' => '2017-03-31 03:37:59',
                'updated_at' => '2017-03-31 03:38:31',
            ),
            6 => 
            array (
                'id' => 7,
                'descripcion_categoria' => 'Ginebra',
                'created_at' => '2017-03-31 03:37:59',
                'updated_at' => '2017-03-31 03:37:59',
            ),
            7 => 
            array (
                'id' => 8,
                'descripcion_categoria' => 'Espumantes',
                'created_at' => '2017-03-31 03:37:59',
                'updated_at' => '2017-03-31 03:37:59',
            ),
        ));
        
        
    }
}
