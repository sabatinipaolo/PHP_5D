<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <title>elabora parametri POST</title>
  </head>
  <body>
    <header></header>
    <main>
    <p>
    <?php 
      //la pagina viene chiamata con metodo POST
      // i valori dei parametri non sono più visibili nella URL con la querystring
      // sono incapsulati nel body della richiesta HTTP
      // per esercizio: provare a vedere la differenza con lo strumento di sviluppo del browser (tab rete / network)
      // o con un tool come wireshark
      //
      // quindi i parametri vanno letti nell'array superglobale $_POST


      if (isset( $_POST["par1"])) {
        echo " par1 è stato passato ";

          if (empty( $_POST["par1"] )){
            echo "ma è vuooto ";
          }
          else {
            echo "ed è ".$_POST["par1"];
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
      if (isset( $_POST["par2"])) {
        echo " par2 è stato passato ";

          if (empty( $_POST["par2"] )){
            echo "ma è vuooto ";
          }
          else {
            echo "ed è ".$_POST["par2"];
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
      foreach($_POST as $parametro => $valore) {
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