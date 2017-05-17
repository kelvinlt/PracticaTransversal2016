<?php
$cnombre=$_POST['nombre'];
$conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");

$sql=("select nombre,fecha,descripcion, precio  from concierto  where nombre like '%" .$cnombre. "%'") or die ("no se puede conectar y conseguir el select");
if($resultado=  mysqli_query($conexion, $sql)){
        echo '<br>';
        echo 'Se ha encontrado una/s conincidencia/s';
        echo '<br>';
        while($obj=mysqli_fetch_object($resultado)) {
                        
                        echo "<tr >";
                        echo '<br>';
                        echo "<td>Nombre: $obj->nombre</td>";
                        echo '<br>';
                        echo "<td>Fecha: $obj->fecha</td>";
                        echo '<br>';
                        echo "<td>Descripcion: $obj->descripcion</td>";
                        echo '<br>';
                        echo "<td>Precio: $obj->precio</td>";
                        echo '<br>';
                        echo "</tr>";
                                }
                    mysqli_close($conexion);  
    
}
else {
    echo 'No se ha encontrado ninguna coincidencia';   
    mysqli_close($conexion);
}
?>
