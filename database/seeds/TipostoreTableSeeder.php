<?php

use Illuminate\Database\Seeder;

class TipostoreTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipostore')->delete();
        
        \DB::table('tipostore')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion_tipo' => 'Gold',
                'created_at' => '2017-01-01 00:00:00',
                'updated_at' => '2017-03-31 05:09:52',
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion_tipo' => 'Silver',
                'created_at' => '2017-01-01 00:00:00',
                'updated_at' => '2017-03-31 05:09:40',
            ),
        ));
        
        
    }
}
