<html>
<head></head>
<body>
<?php
//Encrypt prueba actual

$pwd=$_POST['contrasena'];
$pwd_encrip=crypt($pwd,"clavedeencriptacion");

//$key=md5('codigodeencriptacion');
//$pass_encrip= rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key,$POST['contrasena'], MCRYPT_MODE_ECB)));
//ENCRYPTACION
//$pass_encrip=mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key,$POST['contrasena'], MCRYPT_MODE_ECB);
//$pass_encrip=md5('codigodeencriptacion',$POST['contrasena'])
//$pass_encrip=crypt($POST['contrasena']);
//--------------------------------------------------------------------------------------------
//FOTOS
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="fotos/".$foto;
copy ($ruta,$destino);
//--------------------------------------------------------------------------------------------

$conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar");
mysqli_query($conexion,"insert into usuarios(email,contrasena,nombre,ape1,ape2,direccion,tipo,telefono,cp,foto,id_ciudad)
values('".$_POST['email']."','".$pwd_encrip."','".$_POST['nombre']."','".$_POST['ape1']."','".$_POST['ape2']."','".$_POST['direccion']."','Fan','".$_POST['telefono']."','".$_POST['cp']."','$destino','".$_POST['ciudad']."')") or die ("no se puede poner datos");
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