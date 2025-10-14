<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header></header>
    <main>
      <?php
        // questa pagina contiene un form che invia i dati a se stessa
        // l'attributo action del form è il nome della pagina stessa
        // in questo modo la pagina può essere usata sia per mostrare il form
        // sia per elaborare i dati inviati dal form
        // se la pagina è stata chiamata senza parametri (cioè la prima volta)
        // mostra il form
        // se la pagina è stata chiamata con il parametro "enne"
        // mostra anche la tabellina del numero passato come parametro
        
        if (isset( $_GET["enne"]) and !empty( $_GET["enne"] )) {
            $enne=$_GET["enne"];
            $mostra_tabelllina=true;
          }
         
        else {
          $enne=2;
          $mostra_tabelllina=false;
        }
      ?>


      <p>Inserisci un numero per sapere la sua tabellina</p>
      <form action="06_php_form_se_stesso.php">
        <label for="fname">numero:</label><br>
        <input type="number " name="enne" value="<?php echo $enne; ?>"><br>
        <input type="submit" value="Submit">
      </form> 
     </main>

    <?php 
      if ($mostra_tabelllina) {
        echo "<h2>Tabellina del $enne</h2>";
        for ($i=1; $i <= 10; $i++) {
          echo "$i x $enne = ".($i*$enne)."<br>";
        }
      }
    ?>
    <footer></footer>
  </body>
</html>  