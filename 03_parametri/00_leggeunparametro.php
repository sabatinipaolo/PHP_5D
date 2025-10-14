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

    <?php  /*$_GET[ ] è un array "associativo" DI SISTEMA, fornisce alla pagina php 
           i parametri passati nell'url , degli array associativi ne parleremo più avanti
           */ 
    ?>
    
    </main>
    <footer></footer>
  </body>
</html>