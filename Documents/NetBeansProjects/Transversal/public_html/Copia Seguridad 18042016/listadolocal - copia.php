 <?php
        $conexion = mysqli_connect("localhost","jjdaglwr_kelvinl", "646417711Sb", "jjdaglwr_beatingbeats") or die ("no se puede conectar a la base de datos");
        $result=mysqli_query($conexion,"select * from usuarios where tipo='local'");
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
					echo "<td style='width:10%;'>".$row['foto']."</td>";
					echo "<td style='width:10%;'>".$row['contrasena']."</td>";
					echo "<td style='width:10%;'>".$row['email']."</td>";
					echo "<td style='width:10%;'>".$row['latitud']."</td>";
					echo "<td style='width:10%;'>".$row['longitud']."</td>";				
					echo "</tr>";					
				}
				echo "</table>";
        
        ?>