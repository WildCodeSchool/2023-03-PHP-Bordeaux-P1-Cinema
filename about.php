<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <title>About</title>
</head>
<body>
    <header id ="about">
        <?php
        include "_includes/navigation.php";
        ?>
    </header>
<main>
    <section class ="cinemaStory">
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium alias aperiam consequuntur corporis excepturi expedita id inventore itaque libero nobis nulla odit officiis sapiente sed sequi vel, veniam voluptates?</p>

    </section>
<section class="contactDetails">
    <article class="carte-responsive">
      <a href="https://goo.gl/maps/wfWth2khu6wud8mx8">
            <img  class="map" src="/assets/images/map.png" alt="Carte de Google de l'emplacement de notre cinéma">
        </a>
    </article>

    <article>
        <h2>Coordonnées</h2>
        <p>THE WILD CINEMA</p>
        <p>171 rue Laucien Faure , 33300 Bordeaux</p>

        <p>
            <a href="mailto:thewildcinema@gmail.com">Mail : thewildcinema@gmail.com</a>
        </p>
        <p>répondeur :<a href="tel:+33556782661"> 05 56 78 26 61 </a></p>

    </article>
    <article>
        <h2>Tarifs</h2>
        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, beatae commodi consectetur consequatur enim excepturi explicabo facere hic illum impedit magni obcaecati perferendis placeat quidem repudiandae sed sit totam velit?</p>
    </article>

</section>
<section class="contactDetails">
    <article>
    <h2>Nos salles</h2>
    </article>
<?php
$halls = ['royalRoom.jpg','blueRoom.jpg', 'theHall.jpg'];
foreach ($halls as $hall) :

?>
    <article><img src="asset/images/<?= $hall?>" alt=""> </article>
   <?php endforeach; ?>
</section>
</main>
</body>
</html>