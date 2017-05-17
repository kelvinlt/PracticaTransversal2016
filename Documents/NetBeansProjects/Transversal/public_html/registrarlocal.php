<html>
<head>
    <meta name="title" content="Beating Beats">
        <meta name="description" content="Proyecto de dam1 de Stucom sobre la pagina web BeatingBeats">
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78018612-1', 'auto');
  ga('send', 'pageview');

</script></head>
<body>
<?php
//$pass=$POST['contrasena'];
//$pass_encrip=crypt($pass,'clavedeencriptacion');

$pwd=$_POST['contrasena'];
$pwd_encrip=crypt($pwd,"clavedeencriptacion");

$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="/home/jjdaglwr/public_html/beta/fotos/".$foto;
copy ($ruta,$destino);

$conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar");
mysqli_query($conexion,"insert into usuarios(email,contrasena,nombre,latitud,longitud,direccion,tipo,telefono,cp,foto,id_ciudad)
values('".$_POST['email']."','".$pwd_encrip."','".$_POST['nombre']."','".$_POST['latitud']."','".$_POST['longitud']."','".$_POST['direccion']."','local','".$_POST['telefono']."','".$_POST['cp']."','$destino','".$_POST['ciudad']."')") or die ("no se puede poner datos");
print "<h2>Datos introducidos </h2><br>";
echo $_POST['email'],"<br>";
echo $_POST['contrasena'],"<br>";
echo $_POST['nombre'],"<br>";
echo $_POST['latitud'],"<br>";
echo $_POST['longitud'],"<br>";
echo $_POST['direccion'],"<br>";
echo $_POST['telefono'],"<br>";
echo $_POST['cp'],"<br>";
echo $_POST['tipo'],"<br>";
echo $_POST['ciudad'],"<br>";
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