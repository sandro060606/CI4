<?php

namespace App\Controllers; //Donde estara el Controlador

use App\Controllers\BaseController; //SuperClase del Controlador
use App\Models\VehiculoModel; //Modelo del Vehiculo
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
        try{
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
            $this->response->setContentType('application/pdf');

            //Forma B: Especificar "Cabeceras de Binario"
            
            exit();

        }catch(Html2PdfException $e){
            $html2pdf->clean();
            throw new \RuntimeException($e->getMessage());
        }
    }
}