<?php
/*
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà.
Tra le varie proprietá, la classe Movie 'ha un' genere (sfruttare il concetto di composizione).
Bonus 1:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.
Possiamo ad esempio organizzare il codice:
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.

 */
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies</title>
</head>

<body>
  <main id="app_main">
    <div class="container">
      <h1>Lista Film</h1>
      <ul>
        <?php foreach ($movies as $movie): ?>
          <li>
            <h2><?=$movie->get_name()?></h2>
            <p>Genere: <?=$movie->get_genre()?></p>
          </li>
        <?php endforeach;?>
      </ul>
    </div>
    <!-- /.container -->
  </main>
  <!-- /#app_main -->

</body>

</html>