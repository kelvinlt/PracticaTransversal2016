<html>
    <head>
        <title>Index del buscador</title>
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
        
        Buscador de locales:
        <form action="buscadorlocal.php" method=post>
            Nombre:<input type=text name=nombre><br>
            <input type=submit>
            <input type=reset>
        </form>
        
        Buscador de grupos de musica:
        <form action="buscadorgrupo.php" method=post>
            Nombre:<input type=text name=nombre><br>
            <input type=submit>
            <input type=reset>
        </form>
        
        Buscador de conciertos:        
        <form action="buscadorconcierto.php" method="post">
            Nombre:<input type=text name=nombre><br>
            <input type=submit>
            <input type=reset>            
        </form>
        
        <!--
        $nombre=$get[nombre];
         
        select * from usuarios where tipo=local and nombre=$nombre
        select * from usuarios where tipo=grupo and nombre=$nombre
        select * from concierto where nombre=$nombre     
        -->
    </body>
</html>