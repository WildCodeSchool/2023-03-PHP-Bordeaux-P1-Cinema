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
    <title>Wild Cinema - Terminator 2</title>
</head>
<body>
<!---------- HEADER WITH BUTTON -------->
<header id="terminator2">
    <?php
    include "_includes/navigation.php";
    ?>
    <div id="youtubeOn" onclick="youtubeButton()"></div>
    <iframe id="youtube" src="https://www.youtube.com/embed/yWF2_TCgsas" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div id="youtubeClose" onclick="youtubeButtonCLose()"><span>Close</span></div>
</header>
<!----------END OF HEADER-------->

<!---Movie description--->
<div class="movieDescription">
    <img class="moviePoster" src ="assets/images/Terminator2.jpeg" alt="affiche-film-Terminator">
    <div class ="synopsis">
        <h2>Synopsis</h2>
        <p>Après l'immense embrasement nucléaire du 29 août 1997, les rares humains survivants, menés par John Connor, luttent sans relâche contre l'armée de robots dirigée par Skynet, un ordinateur surpuissant. Skynet tente d'abord d'éliminer Sarah Connor, la mère de John, grâce à un cyborg projeté en 1984, mais en vain. Il transfère alors dans le passé un deuxième robot, T1000, et l'envoie à l'époque où John Connor n'était encore qu'un enfant.</p>
    </div>
    <div class="casting">
        <h2>Casting</h2>
        <p>14 février 1991 en salle / 1h 42min / Action / Science fiction</p>
        <p>De James Cameron</p>
        <p>Avec Arnold Schwarzenegger , Linda Hamilton, Edward Furlong, Robert Patrick</p>
    </div>
</div>
<!----------End of movie description------->
<h2>Galerie</h2>
<!---- Start of gallery------>
<div class="pictureGallery">
    <img src="assets/capture/d6c2a4b_13614-1axqegn.86rqvholxr.jpg" alt="personnages-terminator">
    <img src="assets/capture/terminator-2-arnold-schwarzenegger.jpg" alt="enfant qui nage-avatar">
    <img src="assets/capture/85475547.jpeg" alt="guerre-avatar">
    <img src="assets/capture/1200_e88n.jpg" alt="personnages qui volent-avatar">
    <img src="assets/capture/arnold-schwarzenegger-photo-terminator-996327.jpg" alt="viewpoint-avatar">
    <img src="assets/capture/Terminator3T800.jpg" alt="personnages qui volent-avatar">
</div>
<!------- End of gallery------->

<?php
include "_includes/footer.php";
?>

</body>
</html>