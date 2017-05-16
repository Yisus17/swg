<?php

use Illuminate\Database\Seeder;

class ColaboradorTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('colaborador')->delete();
        
        \DB::table('colaborador')->insert(array (
            0 => 
            array (
                'id' => 2,
                'nombre' => 'Emmanuel Morales',
                'cedula_id' => '8-456-654',
                'telefono' => '6523-6665',
                'email' => 'emma@iapanama.com',
                'created_at' => '2017-03-31 06:48:46',
                'updated_at' => '2017-03-31 06:48:46',
            ),
        ));
        
        
    }
}
