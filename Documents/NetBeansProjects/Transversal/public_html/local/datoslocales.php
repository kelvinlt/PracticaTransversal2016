<?php
session_start();
$idusu=$_SESSION['id_usuario'];
$email = $_SESSION['email'];
$pwd=$_SESSION['contrasena'];
$pwd_encrip=crypt($pwd,"clavedeencriptacion");
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];

$conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
$consulta=mysqli_query($conexion,"select *  from usuarios where email='".$email."' and contrasena='".$pwd_encrip."'") or die ("no se puede conectar y conseguir el select");
$resultado= mysqli_fetch_row($consulta);
$sql = "update usuarios set nombre='".$nombre."', direccion='".$direccion."' where id_usuario='".$idusu."'";

if(mysqli_query($conexion, $sql)){
    header('Location: indexlocal.php');
}
else{
    echo 'Error';
}
//que quiero hacer?
    //quiero modificar nombre y direccion del usuario
        //update
            //


?>
