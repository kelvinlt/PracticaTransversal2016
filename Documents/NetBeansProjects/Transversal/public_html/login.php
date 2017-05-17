<?php
ob_start();
session_start();
$email = $_POST['email'];
$pwd=$_POST['contrasena'];
$pwd_encrip=crypt($pwd,"clavedeencriptacion");

$conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
$consulta=mysqli_query($conexion,"select *  from usuarios where email='".$email."' and contrasena='".$pwd_encrip."'") or die ("no se puede conectar y conseguir el select");
$resultado= mysqli_fetch_row($consulta);
$sql = "select *  from usuarios where email='".$email."' and contrasena='".$pwd_encrip."'";
$result= mysqli_query($conexion, $sql);
$row = mysqli_fetch_array($result);
if($row){
    unset($_SESSION['tipo']);
    $_SESSION['id_usuario']= $row['id_usuario'];
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['ape1'] = $row['ape1'];
    $_SESSION['ape2'] = $row['ape2'];
    $_SESSION['direccion']= $row['direccion'];
    $_SESSION['tipo'] = $row['tipo'];
    $_SESSION['telefono']= $row['telefono'];
    $_SESSION['cp']= $row['cp'];
    $_SESSION['foto']= $row['foto'];
    $_SESSION['contrasena']= $row['contrasena'];
    $_SESSION['email']= $row['email'];
    $_SESSION['latitud']= $row['latitudl'];
    $_SESSION['longitud']= $row['longitud'];
    
    echo $_SESSION['tipo']; 
    echo "funciona";
    
                                     
//$clocal = "select *  from usuarios where email='".$email."' , contrasena='".$pwd_encrip."' and tipo='".$local."'";
if($_SESSION['tipo']=="fan"){
    header('Location: fan/indexfan.php');
}
if($_SESSION['tipo']=="local"){
    header('Location: local/indexlocal.php');    
}
if($_SESSION['tipo']=="grupo"){
   header('Location: grupo/indexgrupo.php');
}
 
}
else{
    header('Location:index.php');
}
ob_end_flush();
?>
