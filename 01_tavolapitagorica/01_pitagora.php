<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <title>01 pitagorica</title>
  </head>
  <body>
    <header></header>
    <main>

    <table>
    <?php
    for ( $r=1; $r <= 10; $r++ ){
      echo "<tr>";
      for ( $c=1; $c <=10 ; $c++){
      
        echo "<td> ". $r * $c . "</td> " ;
      }
      echo "</tr> \n";
    }
    ?>

    </table>
    
    </main>
    <footer></footer>
  </body>
</html>