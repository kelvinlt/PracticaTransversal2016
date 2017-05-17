<?php
session_start();
$conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
mysqli_query($conexion,"insert into concierto(nombre,fecha,descripcion,precio,duracion,estado,id_local) values('".$_POST['nombre']."','".$_POST['fecha']."','".$_POST['descripcion']."','".$_POST['precio']."','".$_POST['duracion']."','pendiente','".$_SESSION['id_usuario']."')") or die ("no se puede conectar y hacer el insert");
header('Location:indexlocal.php')
?>