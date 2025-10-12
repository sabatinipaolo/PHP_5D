<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <title>00 classifica</title>
  </head>
  <body>
    <header></header>
    <main>

    <?php
        $squadre = array( "roma", "napoli","milan","juve","inter");
        $punti   = array(     5 ,        7,     3 ,    10,     6 );
        $n=5;
        
        //perché non vanno bene le funzioni sort di sistema in questo caso
        // https://www.w3schools.com/php/func_array_sort.asp

        // cosa ordino ? 
        // le squadre o i punti?
        sort( $punti );   //sort( $squadre );
        // il fatto che esiste questo problema indica che la struttura dati 
        // è mal progettata: il programmatore deve tener presente che i due array 
        // sono "legati" logicamente ma non fisicamente ...

        //ora genero l'html con la classifica ordinata 

        for ( $i = 0 ; $i< $n ; $i++ ){
            echo $i + 1 . "  " . $squadre[ $i ] . "  " . $punti[ $i ] . "<br>\n" ;
        }
     

    ?>

    
    </main>
    <footer></footer>
  </body>
</html>