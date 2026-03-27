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
}