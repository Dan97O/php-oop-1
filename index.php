<?php
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- cdn bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Movies</title>
</head>

<body class="bg-black text-light">
  <main>
    <div class="container mt-5">
      <h1 class="text-center">Lista Film</h1>
      <ul class="mt-5">
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