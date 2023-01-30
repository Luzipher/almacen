<html>
    <link rel="stylesheet" href="css/almacen.css"> 
    <div class="mx-auto" style=" width: 200px; height: 149px;  margin-top: -40px; margin-left: 120px;">
        <img src="img/repog.png" style="height: 145px; width: 500px;"> 
    </div>
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
                         <th>
                              Foto
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
                        <td class="align-middle"> 
                          <img class="rounded" src="imgX/'.$id.'.jpg" style="width: 60px;">
                        </td>
                    </tr>
                </tbody>
            </table> 
         ';
    }
    ?>

</html>