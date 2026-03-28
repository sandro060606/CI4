<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table = "productos";
    protected $primaryKey = "id";
    protected $returnType = "array";
    protected $allowedFields = ["tipo", "descripcion", "precio", "stock", "create_at", "update_at"];

    //Campos de Auditoria => ¿Cuando se Creó?, ¿Cuando se Modifico?
    protected $useTimestamps = true;
    protected $createdField = "create_at"; //Campo Tabla Vehiculos
    protected $updatedField = "update_at"; //Campo Tabla Vehiculos
}