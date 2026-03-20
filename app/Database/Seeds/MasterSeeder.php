<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MasterSeeder extends Seeder
{
    public function run()
    {
        $this->call('ClientesSeeder');
        $this->call('ProovedoresSeeder');  // con doble o, igual que el archivo
        $this->call('ProductosSeeder');
    }
}