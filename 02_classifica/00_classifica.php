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
        
        //ordina i due array in base ai punti ...
        //non conosco il php ma conosco le basi della programmazione e il bubble sort  ...
        //TODO: usare versione ottimizzata del bubblesort

        for ( $i = 0 ; $i< $n-2 ; $i++ ){
            for ( $k = 0 ; $k< $n-1 ; $k++ ){
                if ( $punti[$k]< $punti[$k+1] ){
                    //Scambio punti e squadre 
                    $temp = $punti[$k]  ; $punti[$k]=$punti[$k+1]     ;$punti[$k+1]=$temp;
                    $temp = $squadre[$k]; $squadre[$k]=$squadre[$k+1] ;$squadre[$k+1]=$temp;
                }
            }
        }

        //ora genero l'html con la classifica ordinata 

        for ( $i = 0 ; $i< $n ; $i++ ){
            echo $i + 1 . "  " . $squadre[ $i ] . "  " . $punti[ $i ] . "<br>\n" ;
        }
     

    ?>

    
    </main>
    <footer></footer>
  </body>
</html>