<?php
session_start();
?>

<html>
    <head>
        <title>Local</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="local.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="todo">
        <div id="top">
            <div id="top1">
            <div id="logo">
                
            </div>
            <div id="dlocales"><h2>Dades Locals</h2>
                <div>
                    <form action="dlocales.php" method="post">
                        nom:<input type="text" name="nombre" placeholder="nombre"><br>
                        adreça:<input type="text" name="direccion" placeholder="direccion"><br>
                    <input type="submit">
                    <input type="reset">
                    </form>
                </div>       
            </div>
            </div>
            <div id="top2">
            <div id="aconcerts"><h2>Alta Concert</h2>
                <div>
                    <form action="aconcerts.php" method="post">
                        nom:<input type="text" name="nombre" placeholder="nombre"><br>
                        data:<input type="date" name="fecha" ><br>
                        descripcio:<input type="text" name="descripcion" placeholder="descripcion"><br>
                    <input type="submit">
                    <input type="reset">
                    </form>   
                </div>               
            </div>
        </div>
        </div>
        <div id="mid">
        <div id="coberts"><h2>Concerts Oberts</h2>
            <div>
                <table>
                    <tr><td>Nom</td><td>Data</td><td>Descripcio</td><td>Grups</td><td>Accio</td></tr>
                    <tr><td>kelvin</td><td></td><td></td><td></td><td></td></tr>
                </table>
                <div class="tablas">
                <?php
                 $conexion = new mysqli("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                 $consulta=$conexion->query("SELECT * FROM concierto ORDER BY fecha ASC ") or die("no se puedde conectar ni recibir valores");
                   
                ?>
                    <table class="tindex" border="1">
                    <th class="columnac" colspan="4" width='350px'>Conciertos</th>
                        <tr class="filac"><td class="columnac">Nombre</td><td class="columnac">Fecha</td><td class="columnac">Descripcion</td><td class="columnac">Grupos</td></tr>
                    <?php
                    while($registro=$consulta->fetch_object()) {
                        echo "<tr>";
                        echo "<td>$registro->nombre</td>";
                        echo "<td>$registro->fecha</td>";
                        echo "<td>$registro->descripcion</td>";
                        echo "<td>$registro->duracion</td>";
                        echo "</tr>";
                                }
                    mysqli_close($conexion);    
                    ?>
                </table>
            </div>
        </div>
        </div>
        <div id="bot">
        <div id="ctancats"><h2>Concerts Tancats</h2>
            <div>
                <table>
                    <tr><td>Nom</td><td>Data</td><td>Descripcio</td><td>Grups</td><td>Accio</td></tr>
                    <tr><td>kelvin</td><td></td><td></td><td></td><td></td></tr>
                </table>
                <div class="tablas">
                <?php
                 $conexion = new mysqli("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
                 $consulta=$conexion->query("SELECT * FROM concierto ORDER BY fecha ASC ") or die("no se puedde conectar ni recibir valores");
                   
                ?>
                    <table class="tindex" border="1">
                    <th class="columnac" colspan="4" width='350px'>Conciertos</th>
                        <tr class="filac"><td class="columnac">Nombre</td><td class="columnac">Fecha</td><td class="columnac">Descripcion</td><td class="columnac">Grupos</td></tr>
                    <?php
                    while($registro=$consulta->fetch_object()) {
                        echo "<tr>";
                        echo "<td>$registro->nombre</td>";
                        echo "<td>$registro->fecha</td>";
                        echo "<td>$registro->descripcion</td>";
                        echo "<td>$registro->duracion</td>";
                        echo "</tr>";
                                }
                    mysqli_close($conexion);    
                    ?>
                </table>
            </div>
        </div>
        </div>
        </div>
    </body>
</html>
