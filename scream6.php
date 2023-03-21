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
    <title>Wild Cinema - scream 6</title>
</head>
<body>
<!---------- HEADER WITH BUTTON -------->
<header id="scream6">
    <?php
    include "_includes/navigation.php";
    ?>
    <div id="youtubeOn" onclick="youtubeButton()"></div>
    <iframe  id="youtube" src="https://www.youtube.com/embed/QCbLIEE0WoE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div id="youtubeClose" onclick="youtubeButtonCLose()"><span>Close</span></div>
</header>
<!----------END OF HEADER-------->
<!---Movie description--->
<div class="movieDescription">
    <img class="moviePoster" src ="assets/images/scream6.jpeg" alt="affiche-film-Scream 6">
    <div class ="synopsis">
        <h2>Synopsis</h2>
        <p>Les survivants des derniers meurtres de Ghostface, les sœurs Samantha et Tara Carpenter et les jumeaux Chad et Mindy Meeks, quittent Woodsboro et entament un nouveau chapitre de leur vie à New York. Ils y sont à nouveau victimes d'une série de meurtres commis par un nouveau tueur Ghostface.</p>
    </div>
    <div class="casting">
        <h2>Casting</h2>
        <p>14 février 2022 en salle / 1h 42min / Horreur</p>
        <p>De Matt Bettinelli-Olpin</p>
        <p>Avec Jenna Ortega , Melissa Barrera, Hayden Panettiere, Samara Weaving, Jack Champion</p>
    </div>
</div>
<!----------End of movie description------->
<h2>Galerie</h2>
<!---- Start of gallery------>
<div class="pictureGallery">
    <img src="assets/capture/scream1.jpg" alt="personnages-avatar">
    <img src="assets/capture/scream2.jpg" alt="enfant qui nage-avatar">
    <img src="assets/capture/scream3.jpeg" alt="guerre-avatar">
    <img src="assets/capture/scream4.jpg" alt="personnages qui volent-avatar">
    <img src="assets/capture/Scream-6-850x560.jpg" alt="viewpoint-avatar">
    <img src="assets/capture/scream-6-2023-movie-picture-06-1068x712.jpg" alt="personnages qui volent-avatar">
</div>
<!------- End of gallery------->
<?php
include "_includes/footer.php";
?>

</body>
</html>