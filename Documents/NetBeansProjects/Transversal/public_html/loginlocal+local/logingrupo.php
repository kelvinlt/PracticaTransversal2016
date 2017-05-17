<html>
<head>
<title>Login administrador</title>
</head>
<body>
<?php
session_start();
$email = $_POST['email'];
$pwd=$_POST['contrasena'];
$pwd_encrip=crypt($pwd,"clavedeencriptacion");

$conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
$consulta=mysqli_query($conexion,"select *  from usuarios where email='".$email."' and contrasena='".$pwd_encrip."' and tipo='grupo'") or die ("no se puede conectar y conseguir el select");
$resultado= mysqli_fetch_row($consulta);
$sql = "select *  from usuarios where email='".$email."' and contrasena='".$pwd_encrip."'";
$result= mysqli_query($conexion, $sql);
if(!$resultado){
echo "Usuario o contraseña incorrecta";
echo'<br/>';
echo "$pass_encrip";
echo'<A HREF="login.html">Haz clic aquí para volverte a intentarlo</A>';
}
else{
echo "Usuario correcto, entrando en BeatingBeats como usuario registrado<br>";
echo'<A HREF="indexlocal.php">CLIC AQUI PARA ENTRAR EN INDEX LOCAL</A>';
				echo "<table id='taula-senseinline'>";
                                echo "<tr style='background:#33ccff;'>";
                                        echo "<td style='width:10%;'>nombre</td>";
                                        echo "<td style='width:5%;'>ape1</td>";
                                        echo "<td style='width:5%;'>ape2</td>";
					echo "<td style='width:10%;'>direccion</td>";
					echo "<td style='width:10%;'>tipo</td>";
					echo "<td style='width:10%;'>telefono</td>";
					echo "<td style='width:5%;'>codigo postal</td>";
					echo "<td style='width:10%;'>foto</td>";
					echo "<td style='width:10%;'>contrasena</td>";
					echo "<td style='width:10%;'>email</td>";
					echo "<td style='width:10%;'>latitud</td>";
					echo "<td style='width:10%;'>longitud</td>";
        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {  
                                        echo "<tr style='background:#33ccff;'>";
                                        echo "<td style='width:10%;'>".$row['nombre']."</td>";
                                        echo "<td style='width:5%;'>".$row['ape1']."</td>";
                                        echo "<td style='width:5%;'>".$row['ape2']."</td>";
					echo "<td style='width:10%;'>".$row['direccion']."</td>";
					echo "<td style='width:10%;'>".$row['tipo']."</td>";
					echo "<td style='width:10%;'>".$row['telefono']."</td>";
					echo "<td style='width:5%;'>".$row['cp']."</td>";
					echo "<td style='width:10%;'>",'<img src ="'.$row["foto"].'" width="100"height="100"><br>',"</td>";
					echo "<td style='width:10%;'>".$row['contrasena']."</td>";
					echo "<td style='width:10%;'>".$row['email']."</td>";
					echo "<td style='width:10%;'>".$row['latitud']."</td>";
					echo "<td style='width:10%;'>".$row['longitud']."</td>";				
					echo "</tr>";
                                        echo "</table>";                                        
    }
  }
}
//$clocal = "select *  from usuarios where email='".$email."' , contrasena='".$pwd_encrip."' and tipo='".$local."'";

?>
    <a href="index.php"><button name="indexback">Volver a la pagina inicial</button></a>
</body>
</html>