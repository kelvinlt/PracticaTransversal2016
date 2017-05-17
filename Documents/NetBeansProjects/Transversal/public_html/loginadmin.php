<html>
<head>
<title>Login administrador</title>
        <meta name="title" content="Beating Beats">
        <meta name="description" content="Proyecto de dam1 de Stucom sobre la pagina web BeatingBeats">
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78018612-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>

<?php
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
$consulta=mysqli_query($conexion,"select * from usuarios where email='".$email."' and contrasena='".$contrasena."' and tipo='administrador' ") or die ("no se puede conectar y conseguir el select");;
$Result1= mysqli_fetch_row($consulta);
if(!$Result1)
{
echo "Usuario o contraseña incorrecta";
echo'<br/>';
echo'<A HREF="loginadmin.php">Haz clic aquí para volverte a intentarlo</A>';
}
else
{
echo "Usuario correcto, entrando en BeatingBeats como administrador registrado";
echo '<br/>';
echo'<A HREF="indexadministrador.php">Haz click aqui para ir a administracion</A>';


} 

?>   
</body>
</html>