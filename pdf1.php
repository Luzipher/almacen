<?php

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;     

$con = new SQLite3("productos.db") or die("problemas para conectar");
$cs = $con -> query("SELECT * From articulos WHERE id<=25");
$id = '';
$nombre ='';
$piezas='';
     
     while($resul = $cs -> fetchArray()){
         $id=$resul['id'];
         $nombre=$resul['nombre'];
         $piezas=$resul['piezas'];
     }
     
    $dompdf = new Dompdf();
    ob_start();
    include "plantilla1.php";
    $html = ob_get_clean();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('letter', 'portrait');
    $dompdf->render();
    $dompdf->stream('reporte general');

    $con -> close();
     
?>