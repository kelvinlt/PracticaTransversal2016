<html>
<head>
<title>FORMULARIO DE ALTA </title>
<link href="registros.css" rel="stylesheet" type="text/css"/>
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
<body background="cube.jpg">
    <div id="registrototal">
    <form action="registrarfan.php" method="post" enctype="multipart/form-data">
            Email:<input type="text" name="email" placeholder="Email" required><br>
            Foto: <input type="file" name=foto><br> 
            Nombre:<input type="text" name="nombre" placeholder="Nombre" required><br>
            1er apellido:<input type="text" name="ape1" placeholder="Ape1" required><br>
            2nd apellido:<input type="text" name="ape2" placeholder="Ape2" required><br>
            Dirrecion:<input type="text" name="direccion" placeholder="Direccion" required><br>
            Telefono:<input type="number" name="telefono" placeholder="Telefono" required><br>
            Codigo postal:<input type="number" name="cp" placeholder="CodigoPostal" required><br>
            Contraseña:<input type="password" name="contrasena" placeholder="Password" required><br>
            Ciudad:<select name="ciudad">
                <?php
                $conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar");
                $consulta=mysqli_query($conexion,"Select id_ciudad , nombre from ciudad order by nombre asc") or die("no se puede conectar mi recibir valores");
                while($row = mysqli_fetch_array($consulta))	
                {
                echo'<option value="'.$row['id_ciudad'].'">'.$row['nombre'].'</option>';
                }
                ?>  
                </select>
            <br>
            <br>
              <input type="submit">
              <input type="reset">
        </form>
    <br>
        <a href="index.php"><button name="indexback">Volver a la pagina inicial</button></a>
    </div>
    
</body>
</html>
