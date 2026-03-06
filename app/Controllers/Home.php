<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('senati');
    }

    /**
     * Summary of dashboard
     * @return string
     */
    public function dashboard(): string
    {
        $data = [
            'header' => view('Partials/header'),
            'footer' => view('Partials/footer'),
        ];
        return view('dashboard', $data);
    }
}