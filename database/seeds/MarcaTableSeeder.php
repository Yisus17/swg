<?php

use Illuminate\Database\Seeder;

class MarcaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('marca')->delete();
        
        \DB::table('marca')->insert(array (
            0 => 
            array (
                'id' => 1,
                'categoria_id' => 4,
                'pais_id' => 64,
                'descripcion_marca' => 'Campo Viejo',
                'created_at' => '2017-01-01 00:00:00',
                'updated_at' => '2017-01-01 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'categoria_id' => 4,
                'pais_id' => 41,
                'descripcion_marca' => 'Cousiño Macul',
                'created_at' => '2017-01-01 00:00:00',
                'updated_at' => '2017-01-01 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'categoria_id' => 4,
                'pais_id' => 71,
                'descripcion_marca' => 'Cruse',
                'created_at' => '2017-01-01 00:00:00',
                'updated_at' => '2017-01-01 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'categoria_id' => 4,
                'pais_id' => 12,
                'descripcion_marca' => 'Doña Paula',
                'created_at' => '2017-01-01 00:00:00',
                'updated_at' => '2017-01-01 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'categoria_id' => 5,
                'pais_id' => 61,
                'descripcion_marca' => 'Brewdog',
                'created_at' => '2017-01-01 00:00:00',
                'updated_at' => '2017-01-01 00:00:00',
            ),
            5 => 
            array (
                'id' => 6,
                'categoria_id' => 5,
                'pais_id' => 3,
                'descripcion_marca' => 'Flensburger',
                'created_at' => '2017-01-01 00:00:00',
                'updated_at' => '2017-01-01 00:00:00',
            ),
            6 => 
            array (
                'id' => 7,
                'categoria_id' => 5,
                'pais_id' => 18,
                'descripcion_marca' => 'Van Honsebrouck',
                'created_at' => '2017-01-01 00:00:00',
                'updated_at' => '2017-01-01 00:00:00',
            ),
        ));
        
        
    }
}
