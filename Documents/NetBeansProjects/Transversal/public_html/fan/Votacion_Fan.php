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
                            echo "<td> <a href='http://beta.beatingbeats.es/local/Votacion_Fan.php?id_concierto=$registro->id_concierto &grupo=aceptar'>Aceptar</a></td>";
                            echo "</tr>";
                            }
                            mysqli_close($conexion);    
                            ?>
                        </table>
            </div>
        <div class="tablas">
                        <?php
                        $conexion = new mysqli("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                        $consulta=$conexion->query("SELECT usuarios.nombre as lnombre,usuarios.telefono as ltelefono,usuarios.email as lemail,usuarios.direccion as ldireccion,ciudad.nombre as ciudad,usuarios.cp as lcp from usuarios inner join ciudad on usuarios.id_ciudad=ciudad.id_ciudad where tipo='local'") or die("no se puedde conectar ni recibir valores");
                        ?>
                        <table class="tindex" border="1">
                        <th class="columnac" colspan="6" width='350px'>Locales</th>
                        <tr class="filac"><td class="columnac">Nombre del local</td><td class="columnac">Telefono</td><td class="columnac">Email</td><td class="columnac">Direccion</td><td class="columnac">Ciudad</td><td class="columnac">Codigo postal</td></tr>
                        
                            <?php
                            while($registro=$consulta->fetch_object()) {
                            echo "<tr>";
                            echo "<td>$registro->lnombre</td>";
                            echo "<td>$registro->ltelefono</td>";
                            echo "<td>$registro->lemail</td>";
                            echo "<td>$registro->ldireccion</td>";
                            echo "<td>$registro->lciudad</td>";
                            echo "<td>$registro->lcp</td>";
                            echo "</tr>";
                            }
                            mysqli_close($conexion);    
                            ?>
                        </table>
            </div>
            <div class="tablas">
                        <?php
                        $conexion = new mysqli("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                        $consulta=$conexion->query("SELECT * from usuarios where tipo='grupo' ") or die("no se puedde conectar ni recibir valores");
                        ?>
                        <table class="tindex" border="1">
                        <th class="columnac" colspan="5" width='350px'>Grupos</th>
                        <tr class="filac"><td class="columnac">Nombre del grupo</td><td class="columnac">Fecha</td><td class="columnac">Nombre del local</td><td class="columnac">Ciudad</td><td class="columnac">Estado</td></tr>
                        <!-- inner join de 3:usuarios,ciudad,estilo -->
                            <?php
                            while($registro=$consulta->fetch_object()) {
                            echo "<tr>";
                            echo "<td>$registro->nombre</td>";
                            echo "<td>$registro->telefono</td>";
                            echo "<td>$registro->email</td>";
                            echo "<td>$registro->ciudad</td>";
                            echo "<td>$registro->estilo</td>";
                            echo "</tr>";
                            }
                            mysqli_close($conexion);    
                            ?>
                        </table>
                <input type="">
            </div>
    </body>
</html>

<!--
<form action="votar_puntos">
Local
$nombre
Puntuacion
<input type="number">
<input type="submit" value="Aceptar">

</form>

-->
        