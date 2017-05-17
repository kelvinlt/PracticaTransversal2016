<html>
<head>
<title>Baja usuario</title>
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