<?php

use Illuminate\Database\Seeder;

class ActividadTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('actividad')->delete();
        
        \DB::table('actividad')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cliente_id' => 1,
                'colaborador_id' => 2,
                'fecha' => '2017-04-07 08:00:00',
                'descripcion_cita' => 'Visita a Hotel las Americas',
                'created_at' => '2017-04-07 08:00:00',
                'updated_at' => '2017-04-07 08:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'cliente_id' => 3,
                'colaborador_id' => 2,
                'fecha' => '2017-04-07 09:00:00',
                'descripcion_cita' => 'Visita al Hotel Hilton',
                'created_at' => '2017-04-07 08:00:00',
                'updated_at' => '2017-04-07 08:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'cliente_id' => 5,
                'colaborador_id' => 2,
                'fecha' => '2017-04-07 11:00:00',
                'descripcion_cita' => 'Pasar a Años Locos',
                'created_at' => '2017-04-07 08:00:00',
                'updated_at' => '2017-04-07 08:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'cliente_id' => 2,
                'colaborador_id' => 2,
                'fecha' => '2017-04-06 11:00:00',
                'descripcion_cita' => 'Visita a Decapolis',
                'created_at' => '2017-04-07 08:00:00',
                'updated_at' => '2017-04-07 08:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'cliente_id' => 4,
                'colaborador_id' => 2,
                'fecha' => '2017-04-10 11:00:00',
                'descripcion_cita' => 'Las Clementinas',
                'created_at' => '2017-04-07 08:00:00',
                'updated_at' => '2017-04-07 08:00:00',
            ),
        ));
        
        
    }
}
