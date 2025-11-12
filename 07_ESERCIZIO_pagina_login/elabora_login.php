<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <title>elabora login</title>
  </head>
  <body>
    <header></header>
    <main>
    <?php 
      // Database fittizio di utenti
        $utenti = [
            "mario.rossi" => [
                "password" => "1234",
                "ruolo" => "studente"
            ],
            "admin" => [
                "password" => "admin123",
                "ruolo" => "amministratore"
            ]
        ];
   
        // Recupero i dati inviati dal form di login
        // controlla se i parametri sono stati passati correttamente
        // e non sono vuoti
        // controlla se l'utente esiste nel database fittizio
        // e se la password corrisponde
        // quindi stampa un messaggio di benvenuto con il ruolo dell'utente
        // altrimenti stampa un messaggio di errore 
        

        // va bene ci sono elementti critici in questo esercizio ma è solo per esercitarsi con i parametri
        // in un'applicazione reale non si farebbe così ...
   ?>

    
    </main>
    <footer></footer>
  </body>
</html>