<html>
<head>
<title>Baja usuario</title>
</head>
<body>
<?php
$conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
$stringsqli="delete from usuarios where email='".$_POST['email']."' and nombre='".$_POST['nombre']."'";
mysqli_query($conexion,$stringsqli);
mysqli_close($conexion);
?>
<h1> BAJA PROCESADA </h1> <br>
<br>
<br>
<a href="indexadministrador.html"> Index de administrador </a>
</body>
</html>