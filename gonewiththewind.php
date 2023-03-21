<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/main.css">

    <title>Wild Cinema - Autant en emporte le vent</title>
</head>
<body>
<!---------- HEADER WITH BUTTON -------->
<header id="goneWithTheWind">
    <?php
    include "_includes/navigation.php";
    ?>
    <div id="youtubeOn" onclick="youtubeButton()"></div>
    <iframe id="youtube" src="https://www.youtube.com/embed/NOSSC-7LTdk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div id="youtubeClose" onclick="youtubeButtonCLose()"><span>Close</span></div>
</header>
<!----------END OF HEADER-------->

<!---Movie description--->
<div class="movieDescription">
    <img class="filmPoster" src ="assets/images/Autant en emporte le vent_0002.jpg" alt="affiche-film-autant en emporte le vent">
    <div class ="synopsis">
    <h2>Synopsis</h2>
    <p>En Georgie, en 1861, Scarlett O'Hara est une jeune femme fière et volontaire de la haute société sudiste.<br> Courtisée par tous les bons partis du pays, elle n'a d'yeux que pour Ashley Wilkes malgré ses fiançailles avec sa douce et timide cousine, Melanie Hamilton.<br> Scarlett est pourtant bien décidée à le faire changer d'avis,mais à la réception des Douze Chênes c'est du cynique Rhett Butler qu'elle retient l'attention...</p>
    </div>
    <div class="casting">
        <h2>Casting</h2>
        <p>20 mai 1950 en salle / 3h 42min / Drame</p>
        <p>De Victor Fleming</p>
        <p>Avec Vivien Leigh, Clark Gable, Olivia de Havilland, Hattie McDaniel</p>
    </div>
</div>
<!----------End of movie description------->
<h2>Galerie</h2>
<!---- Start of gallery------>
<div class="pictureGallery">
    <img src="assets/capture/345676.jpg" alt="personnages-avatar">
    <img src="assets/capture/4941-800x450-c-default.jpg" alt="enfant qui nage-avatar">
    <img src="assets/capture/arton1716-1450x800-c.jpg" alt="guerre-avatar">
    <img src="assets/capture/autant-emporte-vent-quoi-est-mort-clark-gable-ans.jpg" alt="personnages qui volent-avatar">
    <img src="assets/capture/image.jpg" alt="viewpoint-avatar">
    <img src="assets/capture/Polemique-peut-on-encore-lire-Autant-en-emporte-le-vent-aujourd-hui.jpg" alt="personnages qui volent-avatar">
</div>
<!------- End of gallery------->


<?php
include "_includes/footer.php";
?>

</body>
</html>