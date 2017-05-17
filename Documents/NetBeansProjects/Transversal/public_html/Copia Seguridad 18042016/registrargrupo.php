<html>
<head></head>
<body>
<?php
//$pass=$POST['contrasena'];
//$pass_encrip=crypt($pass,'clavedeencriptacion');

$pwd=$_POST['contrasena'];
$pwd_encrip=crypt($pwd,"clavedeencriptacion");

$conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar");
mysqli_query($conexion,"insert into usuarios(email,contrasena,nombre,direccion,tipo,telefono,cp,id_estilo)
values('".$_POST['email']."','".$pwd_encrip."','".$_POST['nombre']."','".$_POST['direccion']."','grupo','".$_POST['telefono']."','".$_POST['cp']."','".$_POST['estilo']."')") or die ("no se puede poner datos");
print "<h2>Datos introducidos </h2><br>";
echo $_POST['email'],"<br>";
echo $_POST['contrasena'],"<br>";
echo $_POST['nombre'],"<br>";
echo $_POST['direccion'],"<br>";
echo $_POST['telefono'],"<br>";
echo $_POST['cp'],"<br>";
echo $_POST['tipo'],"<br>";
echo $_POST['estilo'],"<br>";
echo $pwd_encrip,"<br>";
?>
    <br>
    <br> 
    <a href="index.php"> Inicio </a>
<?php
mysqli_close($conexion);
?>
</body>
</html>