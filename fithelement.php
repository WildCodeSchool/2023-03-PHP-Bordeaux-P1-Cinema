<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/modules/cf-variables.css">
    <link rel="stylesheet" href="assets/css/modules/cf-navigation.css">
    <link rel="stylesheet" href="assets/css/modules/cf-about.css">
    <link rel="stylesheet" href="assets/css/modules/cf-movie.css">
    <link rel="stylesheet" href="assets/css/modules/cf-footer.css">
    <title>Wild Cinema - Le Cinquième élément</title>
</head>
<body>
<!---------- HEADER WITH BUTTON -------->
<header id="the5Element">
    <?php
    include "_includes/navigation.php";
    ?>
    <div id="youtubeOn" onclick="youtubeButton()"></div>
    <iframe  id="youtube" src="https://www.youtube.com/embed/7rzmiE-pESk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div id="youtubeClose" onclick="youtubeButtonCLose()"><span>Close</span></div>
</header>
<!----------END OF HEADER-------->

<!---Movie description--->
<div class="movieDescription">
    <img class="moviePoster" src ="assets/images/the5Element.jpg" alt="affiche-film-avatar">
    <div class ="synopsis">
        <h2>Synopsis</h2>
        <p>Egypte, 1914. Des extraterrestres récupèrent quatre pierres magiques, symboles des quatre éléments, jadis confiées à des prêtres. Avant de partir, les extraterrestres promettent que dans 300 ans, ils rapporteront les précieux cailloux. Au XXIIIe siècle, alors qu'ils font route vers la Terre, ils sont anéantis par la planète du Mal. Les habitants de ce monde maléfique, les Mangalores, s'emparent des pierres et foncent vers la Terre.</p>
    </div>
    <div class="casting">
        <h2>Casting</h2>
        <p>réaliser par : <br>Luc Besson</p>
        <p>Acteurs:<br>Bruce Willis<br>Milla Jovovich<br>Gary Oldman<br>Chris Tucker<br>Ian Holm<br>Luke Perry</p>
    </div>
    <div class="casting">
        <h2>Casting</h2>
        <p>7 mai 1997 en salle / 1h 53min / Science fiction</p>
        <p>De Luc Besson</p>
        <p>Avec Bruce Willis, Milla Jovovich, Gary Oldman, Chris Tucker, Ian Holm, Luke Perry </p>
    </div>
</div>

<!----------End of movie description------->
<h2>Galerie</h2>
<!---- Start of gallery------>
<div class="pictureGallery">
    <img src="assets/capture/076_CHL_162001.jpg" alt="personnages-terminator">
    <img src="assets/capture/luc_besson_cover_4337.jpeg" alt="enfant qui nage-avatar">
    <img src="assets/capture/cinquieme-element-tapette-dejantee.jpg" alt="guerre-avatar">
    <img src="assets/capture/5799079.jpeg" alt="personnages qui volent-avatar">
    <img src="assets/capture/768x492_image-film-cinquieme-element-luc-besson.jpeg" alt="viewpoint-avatar">
    <img src="assets/capture/014-The-Fifth-Element-Fashion-in-Film-Vogueint-Feb21-Alamy.jpg" alt="personnages qui volent-avatar">
</div>
<!------- End of gallery------->

<?php
include "_includes/footer.php";
?>

</body>
</html>
