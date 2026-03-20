<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProovedoresSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                "razonsocial" => "Distribuidora Norte SAC",
                "direccion" => "Av. Lima 123",
                "ruc" => "20123456789",
                "telefono" => "987654321",
                "representante" => "Carlos Ramirez"
            ],
            [
                "razonsocial" => "Importaciones Sur SRL",
                "direccion" => "Jr. Cusco 456",
                "ruc" => "20987654321",
                "telefono" => "912345678",
                "representante" => "Maria Lopez"
            ],
            [
                "razonsocial" => "Comercial Centro EIRL",
                "direccion" => "Av. Arequipa 789",
                "ruc" => "20456789123",
                "telefono" => "963524132",
                "representante" => "Pedro Flores"
            ]
        ];
        $this->db->table("proveedores")->insertBatch($data);
    }
}
