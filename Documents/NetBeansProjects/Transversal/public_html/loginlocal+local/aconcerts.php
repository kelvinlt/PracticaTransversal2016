<?php
$conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");

mysqli_query($conexion,"insert into concierto(nombre,fecha,descripcion) values('".$_POST['nombre']."','".$_POST['fecha']."','".$_POST['descripcion']."')")or die ("no se puede poner datos");
print "<h2>Datos introducidos </h2><br>";
echo $_POST['nombre'],"<br>";
echo $_POST['fecha'],"<br>";
echo $_POST['descripcion'],"<br>";

echo'<A HREF="indexlocal.php">Haz clic aquí para volverte al index de locales</A>';
?>