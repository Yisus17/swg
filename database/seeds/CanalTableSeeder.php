<?php

use Illuminate\Database\Seeder;

class CanalTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('canal')->delete();
        
        \DB::table('canal')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion_canal' => 'Off Trade',
                'created_at' => '2017-03-31 03:52:37',
                'updated_at' => '2017-03-31 03:53:29',
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion_canal' => 'On Trade',
                'created_at' => '2017-03-31 03:52:48',
                'updated_at' => '2017-03-31 03:53:42',
            ),
        ));
        
        
    }
}
