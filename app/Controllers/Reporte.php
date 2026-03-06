<?php

namespace App\Controllers;

class Reporte extends BaseController{
    public function diario(): string{
        $data = [
            'header' => view('Partials/header'),
            'footer' => view('Partials/footer'),
        ];
        return view('Reportes/diario', $data);
    }

    public function semanal(): string{
        $data = [
            'header' => view('Partials/header'),
            'footer' => view('Partials/footer'),
        ];
        return view('Reportes/semanal', $data);
    }

    public function mensual(): string{
        $data = [
            'header' => view('Partials/header'),
            'footer' => view('Partials/footer'),
        ];
        return view('Reportes/mensual', $data);
    }

    public function personalizado(): string{
        $data = [
            'header' => view('Partials/header'),
            'footer' => view('Partials/footer'),
        ];
        return view('Reportes/personalizado', $data);
    }
}