<?php
session_start();


?>

<html>
    <head>
        <title>Local</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="local.css" rel="stylesheet" type="text/css"/>
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
                    <form action="aconcert.php" method="post">
                        nom:<input type="text" name="nombre" placeholder="nombre"><br>
                        data:<input type="text" name="fecha" placeholder="fecha"><br>
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
            </div>
        </div>
        </div>
        </div>
    </body>
</html>
