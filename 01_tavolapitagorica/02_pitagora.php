<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <title>02 pitagorica</title>
  </head>
  <body>
    <header></header>
    <main>

    <table style="border: solid 1px ">
    <?php
    for ( $r=1; $r <= 10; $r++ ){
      echo "<tr>";
      for ( $c=1; $c <=10 ; $c++){
      
        echo "<td style='border: 1px solid #000; text-align:right'> ". $r * $c . "</td> " ;
      }
      echo "</tr> \n";
    }
    ?>

    </table>
    
    </main>
    <footer></footer>
  </body>
</html>