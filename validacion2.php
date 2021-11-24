<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

$txtNombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : '';
$txtPi = isset($_POST['txtPi']) ? $_POST['txtPi'] : '';
$txtPe = isset($_POST['txtPe']) ? $_POST['txtPe'] : '';
$txtFe = isset($_POST['txtFe']) ? $_POST['txtFe'] : '';
$txtCp = isset($_POST['txtCp']) ? $_POST['txtCp'] : '';

      if(isset($txtNombre) && !empty($txtNombre) && isset($txtPi) && !empty($txtPi) &&  isset($txtPe) && !empty($txtPe) && isset($txtFe) && !empty($txtFe) && isset($txtCp) && !empty($txtCp)){
         $con = new SQLite3("productos.db") or die("problemas para conectar");
         
            $cs = $con -> query("INSERT INTO articulos(claveP,nombre,piezas,precio,fecha) VALUES('$txtCp','$txtNombre','$txtPi','$txtPe','$txtFe');");
            echo '
            <script>alert("Registro Exitoso!");</script>
            <script>window.location="buscador.html";</script>
           ';
        $con -> close();
      }else{
         echo' <script>alert("Completa los parametros correctamente");</script>
         <script>window.location="formulario.html";</script>
         ';
      }
        
?>