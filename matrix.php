<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/modules/cf-variables.css">
    <link rel="stylesheet" href="assets/css/modules/cf-navigation.css">
    <link rel="stylesheet" href="assets/css/modules/cf-movie.css">
    <link rel="stylesheet" href="assets/css/modules/cf-footer.css">
    <title>Wild Cinema - Matrix</title>
</head>
<body>
<!---------- HEADER WITH BUTTON -------->
<header id="matrix">
    <?php
    include "_includes/navigation.php";
    ?>
    <div id="youtubeOn" onclick="youtubeButton()"></div>
    <iframe id="youtube" src="https://www.youtube.com/embed/8xx91zoASLY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div id="youtubeClose" onclick="youtubeButtonCLose()"><span>Close</span></div>
</header>
<!----------END OF HEADER-------->
<div class="movieDescription">
    <img class="moviePoster" src ="assets/images/043449_af.jpg" alt="affiche-film-Matrix">
    <div class ="synopsis">
        <h2>Synopsis</h2>
        <p>Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est l'un des pirates les plus recherchés du cyber-espace. À cheval entre deux mondes, Neo est assailli par d'étranges songes et des messages cryptés provenant d'un certain Morpheus. Celui-ci l'exhorte à aller au-delà des apparences et à trouver la réponse à la question qui hante constamment ses pensées : qu'est-ce que la Matrice ?</p>
    </div>
    <div class="casting">
        <h2>Casting</h2>
        <p>23 juin 1999 en salle / 2h 16min / Science fiction</p>
        <p>De Lana Wachowski & Lilly Wachowski</p>
        <p>Avec Keanu Reeves,Carrie-Anne Moss, Hugo Weaving, Laurence Fishburne</p>
    </div>
</div>

<h2>Galerie</h2>
<!---- Start of gallery------>
<div class="pictureGallery">
    <img src="assets/capture/snapshot-1590662613.jpeg" alt="personnages-terminator">
    <img src="assets/capture/MV5BMjAxNzc2ODE2NF5BMl5BanBnXkFtZTcwMzU3MTIxNA@@._V1_.jpg" alt="enfant qui nage-avatar">
    <img src="assets/capture/MV5BMTU5NTA0OTIxNF5BMl5BanBnXkFtZTcwNjI4MTc4Mw@@._V1_.jpg" alt="guerre-avatar">
    <img src="assets/capture/MV5BNzM4OTkzMjcxOF5BMl5BanBnXkFtZTgwMTkxMjI1MTI@._V1_.jpg" alt="personnages qui volent-avatar">
    <img src="assets/capture/phpnJonjn.jpg" alt="viewpoint-avatar">
    <img src="assets/capture/keanu-reeves-the-matrix-code.jpg" alt="personnages qui volent-avatar">
</div>
<!------- End of gallery------->
<?php
include "_includes/footer.php";
?>
</body>
</html>