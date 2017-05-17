<?php
$lnombre=$_POST['nombre'];
$conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");

$sql=("select *  from usuarios  where nombre like '%" .$lnombre. "%' and tipo='local'") or die ("no se puede conectar y conseguir el select");
if($resultado=  mysqli_query($conexion, $sql)){
        echo '<br>';
        echo 'Se ha encontrado una/s conincidencia/s';
        echo '<br>';
        while($obj=mysqli_fetch_object($resultado)) {
                        
                        echo "<tr >";
                        echo '<br>';
                        echo "<td>Nombre: $obj->nombre</td>";
                        echo '<br>';
                        echo "<td>Fecha: $obj->email</td>";
                        echo '<br>';
                        echo "<td>Descripcion: $obj->telefono</td>";
                        echo '<br>';
                        echo "<td>Precio: $obj->cp</td>";
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
