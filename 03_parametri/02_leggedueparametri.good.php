<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <title>00 Una pagina che legge i parametri</title>
  </head>
  <body>
    <header></header>
    <main>
    <p>
    <?php 
      if (isset( $_GET["par1"])) {
        echo " par1 è stato passato ";

          if (empty( $_GET["par1"] )){
            echo "ma è vuooto ";
          }
          else {
            echo "ed è ".$_GET["par1"];
          }     
      } 
      else {
        echo "par1 non è stato passato";
      }
      echo "\n";
    ?>
    </p>

    <p>
    <?php 
      if (isset( $_GET["par2"])) {
        echo " par2 è stato passato ";

          if (empty( $_GET["par2"] )){
            echo "ma è vuooto ";
          }
          else {
            echo "ed è ".$_GET["par2"];
          }     
      } 
      else {
        echo "par2 non è stato passato";
      }
      echo "\n";
    ?>
    </p>

    <p>
    <?php
      echo "Tutti i parametri passati sono: \n";
      foreach($_GET as $parametro => $valore) {
        echo "$parametro => $valore \n";
      }
     ?>
    </p>
     
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