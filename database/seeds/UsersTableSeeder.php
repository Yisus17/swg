<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'John Doe',
                'username' => 'jhondoe',
                'email' => 'aldoh@csipanama.com',
                'password' => '$2y$10$YpqZ7vQiUO8hTGe/0Xy/Huna.nBEvIoLrHHCO0K5VF8uS.AtfJmbC',
                'active' => 1,
                'remember_token' => NULL,
                'created_at' => '2017-02-09 21:32:41',
                'updated_at' => '2017-02-09 21:32:41',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Aldo Herrera',
                'username' => 'aldoh',
                'email' => 'aldoh@cableonda.net',
                'password' => '$2y$10$YpqZ7vQiUO8hTGe/0Xy/Huna.nBEvIoLrHHCO0K5VF8uS.AtfJmbC',
                'active' => 1,
                'remember_token' => 'xU8e6fwpm97DiYzymkKnji8uH6Fx3Td5dDyaxicKvMyEPlztHwRy8e4vcO2n',
                'created_at' => '2017-03-15 16:30:25',
                'updated_at' => '2017-03-31 07:37:51',
            ),
        ));
        
        
    }
}
