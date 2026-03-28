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
}