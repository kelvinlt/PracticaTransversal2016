<?php
session_start();
$conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
$sql=("insert into votar_concierto(id_usuario,id_concierto,concierto_puntuacion,concierto_comentario)  values('".$_SESSION['id_usuario']."','".$_SESSION['votar_concierto']."','".$_POST['valoracion']."','".$_POST['comentario']."')") or die ("no se puede conectar y conseguir el select");

if($resultado=  mysqli_query($conexion, $sql)){
    echo 'Se han introducido correctamente la valoracion y el comentario';
}
 else {
    echo 'Error al introducir los datos';
}

?>