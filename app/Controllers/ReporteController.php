<?php

namespace App\Controllers; //Donde estara el Controlador

use App\Controllers\BaseController; //SuperClase del Controlador
use App\Models\VehiculoModel; //Modelo del Vehiculo
use PhpParser\Node\Stmt\TryCatch;
use Spipu\Html2Pdf\Html2Pdf;    //Generar el PDF
use Spipu\Html2Pdf\Exception\Html2PdfException; //Manejar Excepciones del PDF

class ReporteController extends BaseController
{

    public function generarReporteVehiculos()
    {
        //Obteniendo los datos
        $vehiculo = new VehiculoModel();
        $listaVehiculos = $vehiculo->obtenerVehiculos();

        //Enviar los Datos a la PLantilla (Contenedor) Views\Reports\Vehiculos-todos
        $html = view('Reports/vehiculos-todos', ['vehiculos' => $listaVehiculos]);

        //Generar el PDF
        try {
            //Objeto HTML2PDF = P = PORTRAIT, L = LANDSCAPE
            $html2pdf = new Html2Pdf('P', 'A4', 'es');

            // Estableciendo fuente Predeterminada (Opcional)
            $html2pdf->setDefaultFont('Arial');

            //Renderizar datos
            $html2pdf->writeHTML($html);

            //Mostrar el PDF
            // I = Vista Previa | D = Descargar | F = guardar servidor | S = retornar como cadena
            $html2pdf->output('Reporte.pdf', 'I');
            //Forma A:
            $this->response->setHeader('Content-Type', 'application/pdf');

            //Forma B: Especificar "Cabeceras de Binario"

            exit();

        } catch (Html2PdfException $e) {
            $html2pdf->clean();
            throw new \RuntimeException($e->getMessage());
        }
    }

    public function generarReportePrueba()
    {
        //No Modelo de donde negciar los datos.....
        $listapersonas = [
            ["apellidos" => "Torres", "nombres" => "Carlos", "telefono" => "956111222", "genero" => "M", "sueldo" => 2000],
            ["apellidos" => "Quintana", "nombres" => "Juana", "telefono" => "956111333", "genero" => "F", "sueldo" => 4000],
            ["apellidos" => "Flores", "nombres" => "Pedro", "telefono" => "956111444", "genero" => "M", "sueldo" => 3000],
            ["apellidos" => "Ochoa", "nombres" => "Hugo", "telefono" => "956111555", "genero" => "M", "sueldo" => 2200],
            ["apellidos" => "Mendoza", "nombres" => "Silvia", "telefono" => "956111777", "genero" => "F", "sueldo" => 5000],
        ];
        $estilos = view('Reports/estilos');

        $html = view('Reports/prueba', 
            ['personas' => $listapersonas, 
            'estilos' => $estilos]
        );

        try {
            $html2pdf = new Html2Pdf('P', 'A4', 'es', true, 'UTF-8', [20, 15, 15, 15]);
            $html2pdf->setDefaultFont('Arial');
            $html2pdf->writeHTML($html);
            $html2pdf->output('Reporte-prueba.pdf');
            $this->response->setContentType('application/pdf');
            $this->response->setHeader('Content-Type', 'application/pdf');
        } catch (Html2PdfException $e) {
            $html2pdf->clean();
            throw new \RuntimeException($e->getMessage());
        }
    }
}
