<!DOCTYPE html>
<html>
    <head>
        <title>Pagina principal de BeatingBeats</title>
        <meta name="description" content="Proyecto de dam1 de Stucom sobre la pagina web BeatingBeats">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body background="cube.jpg">
        <div id="banner"><img src="beat.jpg" id="beat"> </div>
       
        <div id="reglog">
        <div id="register">
            
            <div id="registerbox1">
                <a href="registrofan.php"><button name="registro fan">Registro de fans</button></a>
            
            </div>            
            <div id="registerbox2">
                <a href="registrolocal.php"><button name="registro local">Registro de locales</button></a>
            
            </div>            
            <div id="registerbox3"><a href="registrogrupo.php">
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
                <table class="tindex">
                    <th class="columnac" colspan="3" width='350px'>Proximos conciertos</th>
                    <tr class="filac"><td class="columnac">Nombre</td><td class="columnac">Fecha</td><td class="columnac">Ciudad</td></tr>
                    <tr class="fila1"><td class="columna1">One Ok Rock</td><td class="columna1">27-01-2017</td><td class="columna1">Barcelona</td></tr>
                    <tr class="fila1"><td class="columna1">Linking Park</td><td class="columna1">14-03-2017</td><td class="columna1">Madrid</td></tr>
                    <tr class="fila1"><td class="columna1">Statovarius</td><td class="columna1">21-04-2017</td><td class="columna1">Barcelona</td></tr>
                    
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
        <footer> BeatingBeats | Copyright 2016 | Kelvin Lee</footer>
    </body>
</html>
