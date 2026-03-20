<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProovedorModel;
use CodeIgniter\HTTP\RedirectResponse;

class Proovedor extends BaseController
{
    public function index(): string
    {
        $proovedor = new ProovedorModel();
        $data = [
            'header' => view('Partials/header'),
            'proovedores' => $proovedor->findAll(),
            'footer' => view('Partials/footer'),
        ];
        return view('Modulos/proovedores/index', $data);
    }

    public function create(): string
    {
        $data = [
            'header' => view('Partials/header'),
            'footer' => view('Partials/footer'),
        ];
        return view('Modulos/proovedores/registrar', $data);
    }

    public function buscar(int $id = null)
    {
        $proovedor = new ProovedorModel();
        $registro = $proovedor->find($id);
        $data = [
            'header' => view('Partials/header'),
            'registro' => $registro,
            'footer' => view('Partials/footer'),
        ];
        return view('Modulos/proovedores/actualizar', $data);
    }

    public function registrarProovedor(): RedirectResponse
    {
        $proovedor = new ProovedorModel();
        $proovedor->insert([
            'razonsocial' => $this->request->getPost('razonsocial'),
            'direccion' => $this->request->getPost('direccion'),
            'ruc' => $this->request->getPost('ruc'),
            'telefono' => $this->request->getPost('telefono'),
            'representante' => $this->request->getPost('representante'),
        ]);
        return redirect()->to('/proovedores');
    }

    public function actualizar(): RedirectResponse
    {
        $proovedor = new ProovedorModel();
        $id = $this->request->getPost('idproovedor');
        $proovedor->update($id, [
            'razonsocial' => $this->request->getPost('razonsocial'),
            'direccion' => $this->request->getPost('direccion'),
            'ruc' => $this->request->getPost('ruc'),
            'telefono' => $this->request->getPost('telefono'),
            'representante' => $this->request->getPost('representante'),
        ]);
        return redirect()->to('/proovedores');
    }

    public function eliminar($id = null): RedirectResponse
    {
        $proovedor = new ProovedorModel();
        $proovedor->delete($id);
        return redirect()->to('/proovedores');
    }
}