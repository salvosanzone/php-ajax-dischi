<?php

/* Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.

Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.

Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere */



//importo il database(l'array) 
require_once __DIR__ . '/db/database.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./style/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" integrity="sha512-u7ppO4TLg4v6EY8yQ6T6d66inT0daGyTodAi6ycbw9+/AU8KMLAF7Z7YGKPMRA96v7t+c7O1s6YCTGkok6p9ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>
<body>
  
  <div id="app">

    <!-- HEADER -->
    <header class="d-flex justify-content-between align-items-center px-2">
      <div class="logo">
        <i class="logo fab fa-spotify fs-1"></i>
      </div>
    </header>
    <!-- /HEADER -->

    <!-- MAIN-->
    <main>
      <div class="container d-flex flex-wrap justify-content-center">
  
        <?php foreach($albums as $album) { ?>
  
          <div class="album">
            <h6 class="text-center">
              <?php echo $album['title']; ?>
            </h6>
            <p class="text-center">
              <?php echo $album['author']; ?>
            </p>
            <p class="text-center">
              <?php echo $album['year']; ?>
            </p>
          </div>
  
          <?php } ?>
  
      </div>
    </main>
    <!-- /MAIN-->
  </div>

  
</body>
</html>