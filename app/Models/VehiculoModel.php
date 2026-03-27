<?php

namespace App\Models;

use CodeIgniter\Model;

class VehiculoModel extends Model{
    protected $table = "vehiculo";
    protected $primaryKey = "id";
    protected $returnType = "array";
    protected $allowedFields = ["", "",""];
}