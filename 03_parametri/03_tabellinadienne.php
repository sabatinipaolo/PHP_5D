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
      if (isset( $_GET["enne"]) and !empty( $_GET["enne"] )) {
        echo " tabellina del ".$_GET["enne"]."<br>";
        for ($i=1; $i <= 10; $i++) {
          echo $i* $_GET["enne"] ."<br>";
        }
      } 
      else {
        echo " se vuoi sapere la tabellina di un numero devi chiamarmi con la query string ?enne=numero";
      }
    ?>
    </p>

   
    
    </main>
    <footer></footer>
  </body>
</html>