<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

$buscador = isset($_POST['buscador']) ? $_POST['buscador'] : '';



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/res.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/almacen.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Almacen</title>
    <style>
        body{
            background: url('img/background.jpg') no-repeat center center fixed;
            background-size: cover;
            -webkit-background-size: cover;
        }
    </style>
</head>
<body>
    <div class="contrainer">
        <div class="row">
        <div class="col-md-8 mx-auto my-5">
        <h1 class= "bg-dark text-white p-3 rounded" style="font-size: 300%;"> Articulos </h1>
          <table class= "table text-center" style="background-color: white; border: solid 1px black;">
          <thead class= "bg-dark text-white">
                <tr>
                <th>
                       Id
                 </th>
                   <th>
                        Nombre
                 </th>
    
                 <th>
                      Clave de producto
                 </th>
    
                 <th>
                     Precio
                 </th>
    
                 <th>
                       Piezas
                 </th>
    
                 <th>
                     Fecha
                 </th>
                 <th>
                    Foto de Articulo
                </th>
    
                 </tr>
         </thead>
                <tbody>
                <?php
                 $con = new SQLite3("productos.db") or die("problemas para conectar");
                 $cs = $con -> query("SELECT * FROM vista1 WHERE comodin LIKE '%$buscador%'");
                 while($res = $cs -> fetchArray()) {
                      $id= $res['id'];
                      $claveP= $res['claveP'];
                      $nombre= $res['nombre'];
                      $precio= $res['precio'];
                      $piezas= $res['piezas'];
                       $fecha= $res['fecha'];
                      echo' 
                      <tr> 
                       <td class="align-middle"> '.$id.' </td>
                       <td class="align-middle"> '.$nombre.'</td>
                       <td class="align-middle"> '.$claveP.'</td>
                       <td class="align-middle"> $ '.$precio.'</td>
                       <td class="align-middle"> '.$piezas.'</td>
                       <td class="align-middle"> '.$fecha.'</td>
                       <td class="align-middle">
                        <img class="rounded" src="imgX/'.$id.'.jpg" style="width: 100px;">
                       </td>
                      </tr>';
                   }  
                 $con -> close();
                ?>
                </tbody>
               </table>
            </div>
         </div>
     </div>
    
</body>
</html>