<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/main.css">

    <title>Wild Cinema - Creed 3</title>
</head>
<body>
<header id="creed3">
    <?php
        include "_includes/navigation.php";
    ?>
    <div id="youtubeOn" onclick="youtubeButton()"></div>
    <iframe id="youtube" src="https://www.youtube.com/embed/D_avHhjjmtU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div id="youtubeClose" onclick="youtubeButtonCLose()"><span>Close</span></div>
</header>
<!---Movie description--->
<div class="movieDescription">
    <img class="moviePoster" src ="assets/images/s-l1600.jpg" alt="affiche-film-avatar">

    <div class ="synopsis">
        <h2>Synopsis</h2>

        <p>Idole de la boxe et entouré de sa famille, Adonis Creed n’a plus rien à prouver. Jusqu’au jour où son ami d’enfance, Damian, prodige de la boxe lui aussi, refait surface.</p>
        <p>A peine sorti de prison, Damian est prêt à tout pour monter sur le ring et reprendre ses droits. Adonis joue alors sa survie, face à un adversaire déterminé à l’anéantir.
        </p>
    </div>
    <div class="casting">
        <h2>Casting</h2>
        <p> 1 mars 2023 en salle / 1h 57min / Drame</p>
        <p>De Michael B. Jordan</p>
        <p>Par Zach Baylin, Keenan Coogler</p>
        <p>Avec Michael B. Jordan, Tessa Thompson, Jonathan Majors</p>
    </div>
</div>

<!----------End of movie description------->
<h2>Galerie</h2>
<!---- Start of gallery------>
<div class="pictureGallery">

    <?php  $pictures = [
        "creedcoachingSmall"=>"Creed en plein entrainement",
        "creedRedSmall"=>"creed dans un halo rouge",
        "creedbeforeMatchSmall"=>"Creed avant le combat",
        "creedMatchSmall"=>"Creed en plein combat",
        "creedMatchSmall"=>"Creed en plein combat",
        "creedMatchSmall"=>"Creed en plein combat"];
    foreach ($pictures as $key=>$alt) : ?>
        <img src="../../assets/images/<?= $key; ?>.jpg" alt="<?= $alt; ?>">

    <?php endforeach; ?>
</div>
<!------- End of gallery------->











<?php
include "_includes/footer.php";
?>


</body>
<script src="assets/js/script.js"></script>
</html>