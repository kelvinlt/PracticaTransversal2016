<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registro grupo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="registros.css" rel="stylesheet" type="text/css"/>
    </head>
    <body background="cube.jpg">
        <div id="registrototal">
          <form action="registrargrupo.php" method="post">
            Email:<input type="text" name="email" placeholder="Email" required><br>
            Nombre:<input type="text" name="nombre" placeholder="Nombre" required><br>
            Dirrecion:<input type="text" name="direccion" placeholder="Direccion" required><br>
            Telefono:<input type="number" name="telefono" placeholder="Telefono" required><br>
            Codigo postal:<input type="number" name="cp" placeholder="CodigoPostal" required><br>
            Contraseña:<input type="password" name="contrasena" placeholder="Password" required><br>
            Estilo:<select name="estilo">
            <?php
                $conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar");
                $consulta=mysqli_query($conexion,"Select id_estilo , nombre from estilo order by nombre asc") or die("no se puede conectar mi recibir valores");
                while($row = mysqli_fetch_array($consulta))	
                {
                echo'<option value="'.$row['id_estilo'].'">'.$row['nombre'].'</option>';
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
