<?php
session_start();
?>
<html>
    <head>
        <title>Local</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="30">
        <link href="indexlocal.css" rel="stylesheet" type="text/css"/>
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
    <body background="/cube.jpg">
        <div id="banner"><img src="/beat.jpg" id="beat"> </div>
        <div id="usu">
        <?php
        echo 'ID Usuario: ';
        echo $_SESSION['id_usuario'];
        echo '<br>';
        echo 'Usuario: ';
        echo $_SESSION['nombre'];
        echo '<br>';
        echo 'Direccion: ';
        echo $_SESSION['direccion']; 
        echo '<br>';
        echo 'Usuario tipo : ';
        echo $_SESSION['tipo'];
        echo '<br>';
        echo "<a href='logout.php'>Log Out</a>";
        ?>
        </div>
        <div id="top">
            <div id="datoslocales">
                <h2>Datos Locales</h2>
                <form action="datoslocales.php" method="post">
                    <label>nombre:</label><input type=text name=nombre><br>
                    <label>direccion:</label><input type=text name=direccion><br>
                    <br>
                    <input type=submit>
                    <input type=reset>
                </form>
            </div>
            <div id="altaconcierto">
                <h2>Alta Concierto</h2>
                <form action="altaconcierto.php" method="post">
                <label>nombre:</label><input type=text name=nombre><br>
                <label>fecha:</label><input type=date name=fecha><br>
                <label>descripcion:</label><input type=text name=descripcion><br>
                <label>precio:</label><input type=number name=precio><br>
                <label>duracion:</label><input type=number name=duracion><br>
                <input type=submit>
                <input type=reset>
                </form>
            </div>
        </div>
        <div id="tablaconciertos">
            <div id="conciertosabiertos">
                <div class="tablas">
                    <?php
                        $conexion = new mysqli("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                        $consulta=$conexion->query("SELECT * FROM concierto where id_local='".$_SESSION['id_usuario']."'  and estado='pendiente'") or die("no se puedde conectar ni recibir valores1");
                        //$consulta=$conexion->query("SELECT concierto.nombre as nombre,concierto.fecha as fecha,concierto.precio as precio,concierto.duracion as duracion,concierto.id_grupo as idgrupo,usuarios.nombre as gnombre from concierto inner join usuarios on concierto.id_grupo = usuarios.id_usuario where id_local='".$_SESSION['id_usuario']."' and estado='pendiente'") or die("no se puedde conectar ni recibir valores1");
                        //$consulta=$conexion->query();
                    ?>
                        <table class="tindex" border="1">
                        <th class="columnac" colspan="6" width='350px'>Conciertos Abiertos</th>
                        <tr class="filac"><td class="columnac">Nombre</td><td class="columnac">Fecha</td><td class="columnac">Precio</td><td class="columnac">Duracion</td><td class="columnac">Grupo</td><td class="columnac">Cerrar</td></tr>
                        
                            <?php
                            while($registro=$consulta->fetch_object()) {
                            echo "<tr>";
                            echo "<td>$registro->nombre</td>";
                            echo "<td>$registro->fecha</td>";
                            echo "<td>$registro->precio</td>";
                            echo "<td>$registro->duracion</td>";
                            echo "<td>$registro->id_grupo<br><a href='http://beta.beatingbeats.es/local/indexlocal.php?id_concierto=$registro->id_concierto &grupo=aceptar'>Aceptar</a> <a href='http://beta.beatingbeats.es/local/indexlocal.php?id_concierto=$registro->id_concierto &grupo=denegar'>Denegar</a></td>";
                            echo "<td><a href='http://beta.beatingbeats.es/local/indexlocal.php?id_concierto=$registro->id_concierto &estado=aceptado'>Cerrar</a></td>";
                            echo "</tr>";
                            }
                            mysqli_close($conexion);   
                            if(isset($_GET['estado']) && $_GET['estado']=="aceptado"){
                                $conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                                $sql="UPDATE  concierto SET  estado='aceptado'  WHERE  id_concierto='".$_GET['id_concierto']."'";
                                $result=  mysqli_query($conexion, $sql);
                                mysqli_close($conexion); 

                             }
                             if(isset($_GET['grupo']) && $_GET['grupo']=="denegar"){
                                $conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                                $sql="UPDATE  concierto SET  id_grupo='NULL'  WHERE  id_concierto='".$_GET['id_concierto']."'";
                                $result=  mysqli_query($conexion, $sql);
                                mysqli_close($conexion);
                             }
                              if(isset($_GET['grupo']) && $_GET['grupo']=="aceptar"){
                                $conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                                $sql="UPDATE  concierto SET  estado='aceptado'  WHERE  id_concierto='".$_GET['id_concierto']."'";
                                $result=  mysqli_query($conexion, $sql);
                                mysqli_close($conexion);                       
                             }
                            ?>
                </table>
            </div>
            </div>
            <div id="conciertoscerrados">
                <div class="tablas">
                    <?php
                        $conexion = new mysqli("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                        $consulta=$conexion->query("SELECT * FROM concierto where id_local='".$_SESSION['id_usuario']."'  and estado='aceptado'") or die("no se puedde conectar ni recibir valores2");
                    ?>
                        <table class="tindex" border="1">
                        <th class="columnac" colspan="5" width='350px'>Conciertos Cerrados</th>
                        <tr class="filac"><td class="columnac">Nombre</td><td class="columnac">Fecha</td><td class="columnac">Precio</td><td class="columnac">Duracion</td><td class="columnac">Editar</td></tr>
                        
                            <?php
                            while($registro=$consulta->fetch_object()) {
                            echo "<tr>";
                            echo "<td>$registro->nombre</td>";
                            echo "<td>$registro->fecha</td>";
                            echo "<td>$registro->precio</td>";
                            echo "<td>$registro->duracion</td>";
                            echo "<td><a href='http://beta.beatingbeats.es/local/indexlocal.php?id_concierto=$registro->id_concierto &estado=pendiente'>Abrir</a></td>";
                            echo "</tr>";
                            }
                            mysqli_close($conexion);
                            if(isset($_GET['estado']) && $_GET['estado']=="pendiente"){
                                $conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                                $sql="UPDATE  concierto SET  estado='pendiente'  WHERE  id_concierto='".$_GET['id_concierto']."'";
                                $result=  mysqli_query($conexion, $sql);
                                mysqli_close($conexion); 
                             }
                            ?>
                </table>
            </div>
            </div>
        </div>
    </body>
</html>
