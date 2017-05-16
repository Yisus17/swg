<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('UsersTableSeeder');
        $this->call('PasswordResetsTableSeeder');
        $this->call('AccionesTableSeeder');
        $this->call('AccionUsuarioTableSeeder');
        $this->call('CanalTableSeeder');
        $this->call('ColaboradorTableSeeder');
        $this->call('CategoriaTableSeeder');
        $this->call('TipostoreTableSeeder');
        $this->call('ClienteTableSeeder');
        $this->call('ActividadTableSeeder');
        $this->call('PaisTableSeeder');
        $this->call('MarcaTableSeeder');
        $this->call('SubmarcaTableSeeder');
    }
}
