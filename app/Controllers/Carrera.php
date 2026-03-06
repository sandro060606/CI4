<?php

namespace App\Controllers;

class Carrera extends BaseController
{
    public function showIngeneria(): string
    {   
        //Los Metodos en los Controladores pueden realizar operaciones complejas
        $lista = array("JavaScript", "Python", "Java", "PHP", "SQL");
        return view('ingeneria', ["desarrollador" => "Sandro Rodriguez Anchante", "lenguajes" => $lista]);
    }

    public function showDesign(): string
    {
        $aplicaciones = ["Photoshop", "CorelDraw", "Premier", "Figma", "SoundBox"];
        return view('design', ['aplicaciones' => $aplicaciones]);
    }
}
