<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductoModel;
use CodeIgniter\HTTP\RedirectResponse;

class ProductoX extends BaseController{
    public function index(){
        $data = [
            'header' => view('Partials/header'),
            'footer' => view('Partials/footer'),
        ];
        return view("Modulos/productosX/index.php", $data);
    }
    /* Funciones Asincronas */

    /**
     * Summary of getProductosX
     * @return \CodeIgniter\HTTP\ResponseInterface
     */
    public function getProductosX(){
        $productosx = new ProductoModel();
        return $this->response->setJSON($productosx->findAll());
    }
    public function registrarProducto(){
        $productosx = new ProductoModel();
        //Todos los campos requeridos, deberan ser enviados en un JSON
        $data = $this->request->getJSON();

        if($productosx->insert($data)){
            return $this->response->setJSON([
                "success" => true,
                "message" => "Vehiculo Registrado Correcatemnte"
            ]);
        }

        return $this->response->setJSON([
            "succes" => false,
            "message" => "Error al registrar el vehiculo"
        ]);
    }
}