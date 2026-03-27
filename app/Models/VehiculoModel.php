<?php

namespace App\Models;

use CodeIgniter\Model;

class VehiculoModel extends Model{
    protected $table = "vehiculos";
    protected $primaryKey = "id";
    protected $returnType = "array";
    protected $allowedFields = ["idmarca", "modelo","anio", "color", "precio"];

    //Campos de Auditoria => ¿Cuando se Creó?, ¿Cuando se Modifico?
    protected $useTimestamps = true;
    protected $createdField = "created_at"; //Campo Tabla Vehiculos
    protected $updatedField = "updated_at"; //Campo Tabla Vehiculos
    
    //Metodos Integrados:
    //FindAll():   Obtener los Registros
    //Find():      Obtener un Registro
    //Insert():    Agregar un nuevo Registro
    //Delete():    Eliminar Fisica registro
    //Update():    Actualizacion

    //Metodo Personalizado
    public function obtenerVehiculos(){
        return $this->select("vehiculos.*, marcas.marca")
        ->join("marcas", "vehiculos.idmarca = marcas.id")
        ->findAll();
    }

    //En caso la Consutla sea muy compleja, podemos Escribir nuestro propio SQL
    public function obtenerVehiculosSQL(){
        return $this->db->table("vehiculos v")
        ->select("v.*, m.marca")
        ->join("marcas m", "v.idmarca = m.id")
        ->get()->getResultArray();
    }

    public function obtenerVehiculosql(){
        $sql = "
            SELECT
                vehiculos.*,
                marcas.marca
            FROM vehiculos
            INNER JOIN marcas ON marcas.id = vehiculos.idmarca
        ";
        return $this->db->query($sql)->getResultArray();
    }
}