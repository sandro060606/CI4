<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductosSeeder extends Seeder
{
    public function run()
    {
        $now = date("Y-m-d H:i:s");

        $data = [
            [
                "tipo" => "Electrónico",
                "descripcion" => "Laptop HP 15 pulgadas",
                "precio" => 2500.00,
                "stock" => 10,
                "create_at" => $now
            ],
            [
                "tipo" => "Accesorio",
                "descripcion" => "Mouse inalámbrico Logitech",
                "precio" => 85.50,
                "stock" => 25,
                "create_at" => $now
            ],
            [
                "tipo" => "Electrónico",
                "descripcion" => "Teclado mecánico RGB",
                "precio" => 150.00,
                "stock" => 15,
                "create_at" => $now
            ]
        ];
        $this->db->table("productos")->insertBatch($data);
    }
}
