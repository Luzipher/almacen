<?php
 error_reporting(E_ALL ^ E_DEPRECATED);
 header("Content-Type: text/html; Charset=UTF-8");
 
 $txtReportes = isset($_POST['txtReportes']) ? $_POST['txtReportes'] : '';
 
 $con = new SQLite3("productos.db") or die("problemas para conectar");
     $cs = $con -> query("SELECT * From articulos WHERE piezas<=4;");
     $id = '';
     
     while($resul = $cs -> fetchArray()){
         $id=$resul['id'];
         echo'
         <p>'.$id.'</p>
         ';
     }
     $con -> close();
?>