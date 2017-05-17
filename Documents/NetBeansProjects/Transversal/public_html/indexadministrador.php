
<html>
    <head>
        <title>Index de administrador</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div id="login1"><a href="altausuario.html"><button name="Altausuario">Alta usuarios</button></a></div>
        <div id="login1"><a href="modificacionusuario.html"><button name="Modificarusuario">Modificar usuarios</button></a></div>
        <div id="login2"><a href="bajausuario.html"><button name="Bajarusuario">Bajar usuarios</button></a></div>
        <div id="login2"><a href="listadolocal.php"><button name="Lista Local">Listado Local</button></a></div>
                
        <?php
        $conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
        $result=mysqli_query($conexion,"select * from usuarios");
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
				while($row=mysqli_fetch_array($result))
				{
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
				}
				echo "</table>";
        
        ?>
    </body>
</html>
