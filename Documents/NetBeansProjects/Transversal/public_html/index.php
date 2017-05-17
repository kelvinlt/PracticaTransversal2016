<html>
    <head>
        <title>Pagina principal de BeatingBeats</title>
        <meta name="title" content="Beating Beats">
        <meta name="description" content="Proyecto de dam1 de Stucom sobre la pagina web BeatingBeats">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="index.css" rel="stylesheet" type="text/css"/>
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
        <div id="banner"><img src="beat.jpg" id="beat"> </div>
       
        <div id="reglog">
        <div id="register">
            
            <div id="registerbox1">
                <a href="registrofan.php"><button name="registro fan" onClick="ga('send', 'event', 'registro', 'fan')">Registro de fans</button></a>
            
            </div>            
            <div id="registerbox2">
                <a href="registrolocal.php"><button name="registro local" onClick="ga('send', 'event', 'registro', 'local')">Registro de locales</button></a>
            
            </div>            
            <div id="registerbox3"><a href="registrogrupo.php" onClick="ga('send', 'event', 'registro', 'grupo')">
                    <button name="registro grupo">Registro de grupos</button></a>
            
            </div>           
        </div >
        
        <div id="logintotal">
            <div id="login1">
                <a href="login.html"><button name="Login">Login para usuarios</button></a>
            </div>
            <div id="login2">
                <a href="loginadmin.html"><button name="Login">Login para administracion</button></a>
            </div>
        </div>
        <br>
        <br>
        </div>
        
        
    <div id="fakeslider">
        <img id="fakeimg" src="fakeslider.jpg">
    </div>      
        
        <div id="tablatabla">
            <div class="tablas">
                <?php
                 $conexion = new mysqli("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                 $consulta=$conexion->query("SELECT * FROM concierto ORDER BY fecha ASC ") or die("no se puedde conectar ni recibir valores");
                   
                ?>
                    <table class="tindex" border="1">
                    <th class="columnac" colspan="4" width='350px'>Conciertos</th>
                        <tr class="filac"><td class="columnac">Nombre</td><td class="columnac">Fecha</td><td class="columnac">Precio</td><td class="columnac">Duracion</td></tr>
                    <?php
                    while($registro=$consulta->fetch_object()) {
                        echo "<tr>";
                        echo "<td>$registro->nombre</td>";
                        echo "<td>$registro->fecha</td>";
                        echo "<td>$registro->precio</td>";
                        echo "<td>$registro->duracion</td>";
                        echo "</tr>";
                                }
                    mysqli_close($conexion);    
                    ?>
                </table>
                <br>
                <br>
                <br>
                <br>
            </div>
            <div class="tablas">
                    <?php
                    $conexion = new mysqli("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                    $consulta=$conexion->query("SELECT usuarios.id_usuario, usuarios.nombre as usunombre,usuarios.direccion as usudireccion,usuarios.telefono as usutelefono, ciudad.id_ciudad, ciudad.nombre as ciunombre FROM usuarios INNER JOIN ciudad ON usuarios.id_ciudad = ciudad.id_ciudad WHERE tipo = 'local' ORDER BY ciunombre ASC ") or die("no se puedde conectar ni recibir valores");
                    ?>
                    <table class="tindex" border="1">
                    <th class="columnac" colspan="4" width='350px'>Locales</th>
                    <tr class="filac"><td class="columnac">Nombre</td><td class="columnac">Dirrecion</td><td class="columnac">Ciudad</td><td class="columnac">Telefono</td></tr>
                    <?php
                    while($registro=$consulta->fetch_object()) {
                        echo "<tr>";
                        echo "<td>$registro->usunombre</td>";
                        echo "<td>$registro->usudireccion</td>";
                        echo "<td>$registro->ciunombre</td>";
                        echo "<td>$registro->usutelefono</td>";
                        echo "</tr>";
                                }
                    mysqli_close($conexion);    
                    ?>
                </table>
                <br>
                <br>
                <br>
            </div>
            <div class="tablas">
                <?php
                    $conexion = new mysqli("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                    $consulta=$conexion->query("SELECT usuarios.id_usuario, usuarios.nombre as usunombre,usuarios.telefono as usutelefono, estilo.id_estilo, estilo.nombre as estnombre FROM usuarios INNER JOIN estilo ON usuarios.id_estilo = estilo.id_estilo WHERE tipo = 'grupo' ORDER BY estnombre ASC ") or die("no se puedde conectar ni recibir valores");
                    ?>
                    <table class="tindex" border="1">
                    <th class="columnac" colspan="3" width='350px'>Musicos</th>
                    <tr class="filac"><td class="columnac">Nombre</td><td class="columnac">Genero</td><td class="columnac">Telefono</td></tr>
                     <?php
                        while($registro=$consulta->fetch_object()) {
                        echo "<tr>";
                        echo "<td>$registro->usunombre</td>";
                        echo "<td>$registro->estnombre</td>";
                        echo "<td>$registro->usutelefono</td>";
                        echo "</tr>";
                                }
                    mysqli_close($conexion);
                    ?>
                </table>
                <br>
                <br>
                <br>
            </div>
        </div>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/AQo55cJHWTU" frameborder="0" allowfullscreen></iframe>
    </body>
</html>