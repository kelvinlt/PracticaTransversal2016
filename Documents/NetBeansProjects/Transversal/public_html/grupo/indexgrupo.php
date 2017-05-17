<?php
session_start();
?>
<html>
    <head>
        <title>Grupo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="indexgrupo.css" rel="stylesheet" type="text/css"/>
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
            <div id="datosgrupos">
                <h2>Datos Grupo</h2>
                <form action="datosgrupo.php" method="post">
                    nombre:<input type=text name=nombre><br>
                    direccion:<input type=text name=direccion><br>
                    <br>
                    <input type=submit>
                    <input type=reset>
                </form>
            </div>
            <div id="conciertosconfirmados">
                <div class="tablas">
                    <?php
                        $conexion = new mysqli("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                        $consulta=$conexion->query("SELECT concierto.nombre as cnombre,concierto.fecha as fecha,concierto.estado as estado,usuarios.nombre as lnombre,ciudad.nombre as ciudad FROM concierto INNER JOIN usuarios ON concierto.id_local = usuarios.id_usuario INNER JOIN ciudad ON usuarios.id_ciudad = ciudad.id_ciudad where estado='aceptado'") or die("no se puedde conectar ni recibir valores");
                    ?>
                        <table class="tindex" border="1">
                        <th class="columnac" colspan="5" width='350px'>Conciertos Confirmados</th>
                        <tr class="filac"><td class="columnac">Nombre del concierto</td><td class="columnac">Fecha</td><td class="columnac">Nombre del local</td><td class="columnac">Ciudad</td><td class="columnac">Estado</td></tr>
                        
                            <?php
                            while($registro=$consulta->fetch_object()) {
                            echo "<tr>";
                            echo "<td>$registro->cnombre</td>";
                            echo "<td>$registro->fecha</td>";
                            echo "<td>$registro->lnombre</td>";
                            echo "<td>$registro->ciudad</td>";
                            echo "<td>$registro->estado</td>";
                            echo "</tr>";
                            }
                            mysqli_close($conexion);    
                            ?>
                </table>
            </div>        
            </div>
        </div>
    <bot>
                <div class="tablas">
                    <?php
                        $conexion = new mysqli("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                        $consulta=$conexion->query("SELECT concierto.id_concierto as idconcierto,concierto.nombre as cnombre,concierto.fecha as fecha,concierto.estado as estado,usuarios.nombre as lnombre,ciudad.nombre as ciudad FROM concierto INNER JOIN usuarios ON concierto.id_local = usuarios.id_usuario INNER JOIN ciudad ON usuarios.id_ciudad = ciudad.id_ciudad where estado='pendiente'") or die("no se puedde conectar ni recibir valores");
                    ?>
                        <table class="tindex" border="1">
                        <th class="columnac" colspan="5" width='350px'>Conciertos Abiertos Para Apuntarse</th>
                        <tr class="filac"><td class="columnac">Nombre del Concierto</td><td class="columnac">Fecha</td><td class="columnac">Nombre del Local</td><td class="columnac">Ciudad</td><td class="columnac">Accion</td></tr>
                        
                            <?php
                            while($registro=$consulta->fetch_object()) {
                            echo "<tr>";
                            echo "<td>$registro->cnombre</td>";
                            echo "<td>$registro->fecha</td>";
                            echo "<td>$registro->lnombre</td>";
                            echo "<td>$registro->ciudad</td>";
                            echo "<td><a href='http://beta.beatingbeats.es/grupo/indexgrupo.php?id_concierto=$registro->idconcierto &apuntar'>Apuntarse</a></td>";
                            echo "</tr>";
                            }
                            mysqli_close($conexion);
                            if(isset($_GET['apuntar'])){
                                $conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                                $sql="UPDATE concierto SET id_grupo='".$_SESSION['id_usuario']."' WHERE id_concierto='".$_GET['id_concierto']."'";
                                $result=  mysqli_query($conexion, $sql);
                                mysqli_close($conexion); 
                             }
                            ?>
                </table>
            </div>
        <div class="tablas">
                <?php
                        $conexion = new mysqli("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                        $consulta=$conexion->query("SELECT concierto.id_concierto as idconcierto,concierto.nombre as cnombre,concierto.fecha as fecha,concierto.estado as estado,usuarios.nombre as lnombre,ciudad.nombre as ciudad FROM concierto INNER JOIN usuarios ON concierto.id_local = usuarios.id_usuario INNER JOIN ciudad ON usuarios.id_ciudad = ciudad.id_ciudad where estado='pendiente' and concierto.id_grupo='".$_SESSION['id_usuario']."'     ") or die("no se puedde conectar ni recibir valores");
                    ?>
                        <table class="tindex" border="1">
                        <th class="columnac" colspan="5" width='350px'>Conciertos Donde Estas Apunatado</th>
                        <tr class="filac"><td class="columnac">Nombre del Concierto</td><td class="columnac">Fecha</td><td class="columnac">Nombre del Local</td><td class="columnac">Ciudad</td><td class="columnac">Accion</td></tr>
                        
                            <?php
                            while($registro=$consulta->fetch_object()) {
                            echo "<tr>";
                            echo "<td>$registro->cnombre</td>";
                            echo "<td>$registro->fecha</td>";
                            echo "<td>$registro->lnombre</td>";
                            echo "<td>$registro->ciudad</td>";
                            echo "<td><a href='http://beta.beatingbeats.es/grupo/indexgrupo.php?id_concierto=$registro->idconcierto &desapuntar'>Desapuntarse</a></td>";
                            echo "</tr>";
                            }
                            mysqli_close($conexion);
                            if(isset($_GET['desapuntar'])){
                                $conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                                $sql="UPDATE concierto SET id_grupo='null' WHERE id_concierto='".$_GET['id_concierto']."'";
                                $result=  mysqli_query($conexion, $sql);
                                mysqli_close($conexion); 
                             }
                            ?>
                </table>
         </div>   
</bot>
    </body>
</html>
