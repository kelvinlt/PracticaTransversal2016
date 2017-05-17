<html>
<head>
<title>Login administrador</title>
</head>
<body>

<?php
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
$consulta=mysqli_query($conexion,"select * from usuarios where email='".$email."' and contrasena='".$contrasena."' and tipo='administrador' ") or die ("no se puede conectar y conseguir el select");;
$Result1= mysqli_fetch_row($consulta);
if(!$Result1)
{
echo "Usuario o contraseña incorrecta";
echo'<br/>';
echo'<A HREF="loginadmin.php">Haz clic aquí para volverte a intentarlo</A>';
}
else
{
echo "Usuario correcto, entrando en BeatingBeats como administrador registrado";
echo '<br/>';
echo'<A HREF="indexadministrador.php">Haz click aqui para ir a administracion</A>';


} 

?>   
</body>
</html>