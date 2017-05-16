<?php

use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cliente')->delete();
        
        \DB::table('cliente')->insert(array (
            0 => 
            array (
                'id' => 1,
                'codigo' => 'C04913',
                'descripcion_cliente' => 'Hotel Las Americas',
                'canal_id' => 2,
                'subcanal_id' => 1,
                'tipo_id' => 1,
                'key_account' => 2,
                'vendedor' => 2,
                'contacto' => 'Nahum',
                'tel1' => '61187884',
                'tel2' => NULL,
                'email' => NULL,
                'direccion' => 'Entrada a Marbella - Inicios de la balboa. Edif. Dorado',
                'created_at' => '2017-01-01 00:00:00',
                'updated_at' => '2017-01-01 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'codigo' => 'C00141',
                'descripcion_cliente' => 'Decapolis',
                'canal_id' => 2,
                'subcanal_id' => 1,
                'tipo_id' => 1,
                'key_account' => 2,
                'vendedor' => 2,
                'contacto' => 'Danilo Galarza',
                'tel1' => '6997395',
                'tel2' => NULL,
                'email' => NULL,
                'direccion' => 'Ave. Balboa',
                'created_at' => '2017-01-01 00:00:00',
                'updated_at' => '2017-01-01 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'codigo' => 'C04594',
                'descripcion_cliente' => 'Hotel Hilton',
                'canal_id' => 2,
                'subcanal_id' => 1,
                'tipo_id' => 1,
                'key_account' => 2,
                'vendedor' => 2,
                'contacto' => 'Pedro Alvarez - Director AB',
                'tel1' => '62059968',
                'tel2' => NULL,
                'email' => NULL,
                'direccion' => 'Ave. Balboa',
                'created_at' => '2017-01-01 00:00:00',
                'updated_at' => '2017-01-01 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'codigo' => 'C02107',
                'descripcion_cliente' => 'Las Clementinas',
                'canal_id' => 2,
                'subcanal_id' => 2,
                'tipo_id' => 2,
                'key_account' => 2,
                'vendedor' => 2,
                'contacto' => 'Esperanza',
                'tel1' => '62037926',
                'tel2' => NULL,
                'email' => NULL,
                'direccion' => 'Casco Antiguo',
                'created_at' => '2017-01-01 00:00:00',
                'updated_at' => '2017-01-01 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'codigo' => 'C00240',
                'descripcion_cliente' => 'Años Locos',
                'canal_id' => 2,
                'subcanal_id' => 2,
                'tipo_id' => 2,
                'key_account' => 2,
                'vendedor' => 2,
                'contacto' => 'Maria Helena',
                'tel1' => '69795936',
                'tel2' => NULL,
                'email' => NULL,
                'direccion' => 'San Fransisco',
                'created_at' => '2017-01-01 00:00:00',
                'updated_at' => '2017-01-01 00:00:00',
            ),
        ));
        
        
    }
}
