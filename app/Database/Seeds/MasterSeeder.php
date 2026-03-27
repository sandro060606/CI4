<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MasterSeeder extends Seeder
{
    public function run()
    {
        $this->call('ClientesSeeder');
        $this->call('ProovedoresSeeder');
        $this->call('ProductosSeeder');
        $this->call('MarcasSeeder');
        $this->call('VehiculosSeeder');
    }
}