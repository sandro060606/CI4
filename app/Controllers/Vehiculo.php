<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\VehiculoModel;
use CodeIgniter\HTTP\RedirectResponse;

class Vehiculo extends BaseController
{
    public function index(){
        $data = [
            'header' => view(name: 'Partials/header'),
            'footer' => view(name: 'Partials/footer'),
        ];

        return view("Modulos/vehiculos/index", $data);
    }

    //El Controlador "Servira" resultados asíncronos, por lo tanto requiere:
    //Codigo servidos               https://developer.mozilla.org/es/docs/Web/HTTP/Reference/Status
    //Resultado en formato JSON     
    public function getVehiculos(){
        //Se requiere el Modelo
        $vehiculo = new VehiculoModel();
        return $this->response->setJSON($vehiculo->obtenerVehiculos());
    }
}