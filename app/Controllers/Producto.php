<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductoModel;
use CodeIgniter\HTTP\RedirectResponse;

class Producto extends BaseController
{
    public function index(): string
    {
        $producto = new ProductoModel();
        $data = [
            'header' => view('Partials/header'),
            'productos' => $producto->findAll(),
            'footer' => view('Partials/footer'),
        ];
        return view('Modulos/productos/index', $data);
    }

    public function create(): string
    {
        $data = [
            'header' => view('Partials/header'),
            'footer' => view('Partials/footer'),
        ];
        return view('Modulos/productos/registrar', $data);
    }

    public function buscar(int $id = null)
    {
        $producto = new ProductoModel();
        $registro = $producto->find($id);
        $data = [
            'header' => view('Partials/header'),
            'registro' => $registro,
            'footer' => view('Partials/footer'),
        ];
        return view('Modulos/productos/actualizar', $data);
    }

    public function registrarProducto(): RedirectResponse
    {
        $producto = new ProductoModel();
        $producto->insert([
            'tipo' => $this->request->getPost('tipo'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'stock' => $this->request->getPost('stock'),
        ]);
        return redirect()->to('/productos');
    }

    public function actualizar(): RedirectResponse
    {
        $producto = new ProductoModel();
        $id = $this->request->getPost('idproducto');
        $producto->update($id, [
            'tipo' => $this->request->getPost('tipo'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'stock' => $this->request->getPost('stock'),
        ]);
        return redirect()->to('/productos');
    }

    public function eliminar($id = null): RedirectResponse
    {
        $producto = new ProductoModel();
        $producto->delete($id);
        return redirect()->to('/productos');
    }
}