## Esercizio 07: Sistema di Login Semplice
creare una  pagina html con un form con due campi di input 
- username
- password

  
il form al submit richiama la pagina php ( che contiene il "data-base" fittizio degli utenti con il loro ruolo)  **elabora_login.php** che:


 - Recupera i dati inviati dal form di login
 - controlla se i parametri sono stati passati correttamente e non sono vuoti
 - controlla se l'utente esiste nel database fittizio e se la password corrisponde
 - quindi stampa un messaggio di benvenuto con il ruolo dell'utente
 - altrimenti stampa un messaggio di errore

   
```php
<?php
// Database fittizio di utenti
// osserva che è un array associativo di array associativi ...
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
 ....
 
?>
```
