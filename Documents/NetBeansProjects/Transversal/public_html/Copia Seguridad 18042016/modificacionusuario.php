<html>
<head>
<title> CONEXION A BASE DE DATOS Y MODIFICA TABLA </title>
</head>
<body>
<?php
$conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
$stringsqli="update usuarios set contrasena='".$_POST['contrasena']."', nombre='".$_POST['nombre']."', ape1='".$_POST['ape1']."', ape2='".$_POST['ape2']."', direccion='".$_POST['direccion']."', telefono='".$_POST['telefono']."', cp='".$_POST['cp']."', cp='".$_POST['latitud']."', cp='".$_POST['longitud']."' where email='".$_POST['email']."'" or die ("no se pueden añadir los campos") ;
mysqli_query($conexion,$stringsqli);
?>
<br>
MUESTRO LOS DATOS MODIFICADOS
<h1> Datos modificados: </h1>
<?php
echo $_POST['contrasena'], "<br>", $_POST['nombre'], "<br>", $_POST['ape1'],"<br>",$_POST['ape2'],"<br>",$_POST['direccion'],"<br>",$_POST['telefono'],"<br>",$_POST['cp'],$_POST['latitud'],$_POST['longitud'];
?>
<br>
<br>
<a href="indexadministrador.html"> Index de administracion </a><br>
<?php
mysqli_close($conexion);
?>
</body>
</html>