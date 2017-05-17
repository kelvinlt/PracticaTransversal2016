<?php
session_start();
$idconcierto=$_GET['id_concierto'];
$_SESSION['votar_concierto']=$idconcierto;
$conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
$sql=("select nombre as cnombre  from concierto  where id_concierto='".$idconcierto."'") or die ("no se puede conectar y conseguir el select");
if($resultado=  mysqli_query($conexion, $sql)){
    if($obj=mysqli_fetch_object($resultado)){
?>
<html>
    <head><title>Votacion de Concierto</title></head>
    <body>
        Nombre del usuario: <?php echo $_SESSION['nombre'];?><br>
        Nombre del concierto: <?php  echo "<td>$obj->cnombre</td>";?> <br>
<?php
                                                }
                                            }
else{
    echo'No encuentra';
}
?>
        <form action="insert_concierto.php " method="post">
            Valoracion(del 0 al 10)<input type="number" min="0" max="10" name="valoracion" required><br>
            Comentario(100 letras)<input type="text" maxlength="100" name="comentario" required><br>
            <input type="submit">
            <input type="reset">
        </form>
    </body>
</html>
