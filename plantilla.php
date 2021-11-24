<html>
    <link rel="stylesheet" href="css/almacen.css"> 
    <div class="mx-auto" style=" width: 152px; height: 149px; border-radius: 50%; margin-top: -45px; margin-left: 280px;">
        <img src="img/Plata1.png" style="height: 130px; width: 130px;"> 
    </div>
    <p class="font" style="margin-top: -5%; font-size: 200%; margin-left: 145px;"> Plateria Paredes "reporte de inventario" </p>

    <?php  
    while($resul = $cs -> fetchArray()){
        $id=$resul['id'];
        $nombre=$resul['nombre'];
        $claveP= $resul['claveP'];
        $precio= $resul['precio'];
        $piezas= $resul['piezas'];
        $fecha= $resul['fecha'];
        echo'
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
                         
                    </tr>
                </thead>
                <tbody>
                    <tr> 
                        <td class="align-middle"> '.$id.' </td>
                        <td class="align-middle"> '.$nombre.'</td>
                        <td class="align-middle"> '.$claveP.'</td>
                        <td class="align-middle"> $ '.$precio.'</td>
                        <td class="align-middle"> '.$piezas.'</td>
                        <td class="align-middle"> '.$fecha.'</td>
                        
                    </tr>
                </tbody>
            </table> 
         ';
    }
    ?>

</html>