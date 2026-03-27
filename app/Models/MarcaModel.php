<?php

namespace App\Models;

use CodeIgniter\Model;

class MarcaModel extends Model{
     protected $table = "marcas";
    protected $primaryKey = "id";
    protected $returnType = "array";
    protected $allowedFields = ["marca"];
    //Campos de Auditoria => ¿Cuando se Creó?, ¿Cuando se Modifico?
    protected $useTimestamps = true;
    protected $createdField = "created_at"; //Campo Tabla Vehiculos
    protected $updatedField = "updated_at"; //Campo Tabla Vehiculos
}