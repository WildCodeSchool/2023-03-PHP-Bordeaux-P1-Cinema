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
    <title>Wild Cinema - Avatar</title>
</head>
<body>
<!---------- HEADER WITH BUTTON -------->
<header id="avatar2">
    <?php
    include "_includes/navigation.php";
    ?>
    <div id="youtubeOn" onclick="youtubeButton()"></div>
    <iframe  id="youtube" src="https://www.youtube.com/embed/598NnroP42s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div id="youtubeClose" onclick="youtubeButtonCLose()"><span>Close</span></div>
</header>
<!----------END OF HEADER-------->
<!---Movie description--->
<div class="movieDescription">
    <img class="moviePoster" src ="assets/images/s-l1600.jpg" alt="affiche-film-avatar">
    <div class ="synopsis">
        <h2>Synopsis</h2>
        <p>Se déroulant plus d’une décennie après les événements relatés dans le premier film,<br><strong>AVATAR : LA VOIE DE L’EAU</strong> raconte l'histoire des membres de la famille Sully (Jake, Neytiri et leurs enfants),<br>les épreuves auxquelles ils sont confrontés, les chemins qu’ils doivent emprunter pour se protéger les uns les autres,<br>les batailles qu’ils doivent mener pour rester en vie et les tragédies qu'ils endurent.</p>
    </div>
    <div class="casting">
        <h2>Casting</h2>
        <p>14 décembre 2022 en salle / 3h 12min / Science fiction</p>
        <p>De James Cameron</p>
        <p>Avec Sam Worthington, Zoe Saldana, Sigourney Weaver, Kate Winslet, Stephen Lang </p>
    </div>
</div>

<!----------End of movie description------->
<h2>Galerie</h2>
<!---- Start of gallery------>
<div class="pictureGallery">
    <img src="assets/capture/61e002bd4184d_61e002c4260f8.jpeg" alt="personnages-avatar">
    <img src="assets/capture/2106_0130_v0477.1241.jpg" alt="enfant qui nage-avatar">
    <img src="assets/capture/3206108-1256x826.jpeg" alt="guerre-avatar">
    <img src="assets/capture/avatar-2-pourquoi-le-film-de-james-cameron-est-appele-au-boycott-aux-etats-unis.jpg" alt="personnages qui volent-avatar">
    <img src="assets/capture/Avatar 2 2021 Big__w770.jpg" alt="viewpoint-avatar">
    <img src="assets/capture/4176973.jpg-r_1920_1080-f_jpg-q_x-xxyxx.jpg" alt="personnages qui volent-avatar">
</div>
<!------- End of gallery------->
<?php
include "_includes/footer.php";
?>

</body>
</html>