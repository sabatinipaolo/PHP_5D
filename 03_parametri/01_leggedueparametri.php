<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <title>00 Una pagina che legge i parametri</title>
  </head>
  <body>
    <header></header>
    <main>
    <p>sono stata chiamta con il parametro par1=<?php echo $_GET["par1"]; ?></p>

    <p>sono stata chiamta con il parametro par2=<?php echo $_GET["par2"]; ?></p>

    <?php /* 
          che succede se la chiamo senza passare i parametri? 
          o solo uno dei due?   : ?par2=paperino
          o con altri parametri : ?par1=pluto&altro=altrovalore
          */
    ?>

    
    </main>
    <footer></footer>
  </body>
</html>