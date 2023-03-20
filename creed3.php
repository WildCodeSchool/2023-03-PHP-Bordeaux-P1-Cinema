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
<img src ="assets/images/Capture d’écran 2023-03-09 à 19.09.27.png" alt="affiche-film-Creed 3">
   <button id="youtubeOn" onclick="youtubeButton()">buton</button>
    <?php
        include "_includes/navigation.php";
    ?>
    <div id="youtubeOn" onclick="youtubeButton()"></div>
    <iframe id="youtube" src="https://www.youtube.com/embed/D_avHhjjmtU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div id="youtubeClose" onclick="youtubeButtonCLose()"><span>Close</span></div>
</header>
<main>
    <section>
        <h2>SYNOPSIS</h2>
        <article>
            <p>
                Idole de la boxe et entouré de sa famille, Adonis Creed n’a plus rien à prouver. Jusqu’au jour où son ami d’enfance, Damian, prodige de la boxe lui aussi, refait surface. A peine sorti de prison, Damian est prêt à tout pour monter sur le ring et reprendre ses droits. Adonis joue alors sa survie, face à un adversaire déterminé à l’anéantir.
            </p>
        </article>
        <h2>Fiche technique</h2>
        <article>
            <p> 1 mars 2023 en salle / 1h 57min / Drame</p>
            <p>De Michael B. Jordan</p>
            <p>Par Zach Baylin, Keenan Coogler</p>
            <p>Avec Michael B. Jordan, Tessa Thompson, Jonathan Majors</p>
        </article>

    </section>
    <section>
        <h2>SYNOPSIS</h2>
        <article>
            <p>
                Idole de la boxe et entouré de sa famille, Adonis Creed n’a plus rien à prouver. Jusqu’au jour où son ami d’enfance, Damian, prodige de la boxe lui aussi, refait surface. A peine sorti de prison, Damian est prêt à tout pour monter sur le ring et reprendre ses droits. Adonis joue alors sa survie, face à un adversaire déterminé à l’anéantir.
            </p>

        </article>
        <h2>Fiche technique</h2>
        <article>
            <p> 1 mars 2023 en salle / 1h 57min / Drame</p>
            <p>De Michael B. Jordan</p>
            <p>Par Zach Baylin, Keenan Coogler</p>
            <p>Avec Michael B. Jordan, Tessa Thompson, Jonathan Majors</p>
        </article>

    </section>
    <section class="movieGallery">
        <h2>Galerie</h2>
        <article>
            <?php  $pictures = [
                "creedcoachingSmall"=>"Creed en plein entrainement",
                "creedRedSmall"=>"creed dans un halo rouge",
                "creedbeforeMatchSmall"=>"Creed avant le combat",
                "creedMatchSmall"=>"Creed en plein combat"];
            foreach ($pictures as $key=>$alt) : ?>
                <img src="../../assets/images/<?= $key; ?>.jpg" alt="<?= $alt; ?>">

            <?php endforeach; ?>
        </article>
    </section>
</main>
<?php
include "_includes/footer.php";
?>


</body>
<script src="assets/js/script.js"></script>
</html>