<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                "tipo" => "Electrónico",
                "descripcion" => "Laptop HP 15 pulgadas",
                "precio" => 2500.00,
                "stock" => 10
            ],
            [
                "tipo" => "Accesorio",
                "descripcion" => "Mouse inalámbrico Logitech",
                "precio" => 85.50,
                "stock" => 25
            ],
            [
                "tipo" => "Electrónico",
                "descripcion" => "Teclado mecánico RGB",
                "precio" => 150.00,
                "stock" => 15
            ]
        ];
        $this->db->table("productos")->insertBatch($data);
    }
}
