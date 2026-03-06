<?php

namespace App\Controllers;

class Carreras extends BaseController
{
    public function showIngeneria(): string
    {
        return view('ingeneria');
    }

    public function showDesign(): string
    {
        return view('design');
    }
}

