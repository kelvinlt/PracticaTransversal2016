<?php
$conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar");
mysqli_query($conexion,"insert into usuarios(email,contrasena,nombre,ape1,ape2,direccion,tipo,telefono,cp,latitud,longitud)
values('".$_POST['email']."','".$_POST['contrasena']."','".$_POST['nombre']."','".$_POST['ape1']."','".$_POST['ape2']."','".$_POST['direccion']."','".$_POST['tipo']."','".$_POST['telefono']."','".$_POST['cp']."','".$_POST['latitud']."','".$_POST['longitud']."')") or die ("no se puede poner datos");
print "<h2>Datos introducidos </h2><br>";
echo $_POST['email'],"<br>";
echo $_POST['contrasena'],"<br>";
echo $_POST['nombre'],"<br>";
echo $_POST['ape1'],"<br>";
echo $_POST['ape2'],"<br>";
echo $_POST['direccion'],"<br>";
echo $_POST['telefono'],"<br>";
echo $_POST['cp'],"<br>";
echo $_POST['tipo'],"<br>";
echo $_POST['latitud'],"<br>";
echo $_POST['longitud'],"<br>";


?>

    <br>
    <br> 
    <a href="indexadministrador.html"> Inicio </a>
    <br>
    <br>
<?php
mysqli_close($conexion);
?>