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
}