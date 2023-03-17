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

   <button id="youtubeOn" onclick="youtubeButton()">buton</button>
    <iframe id="youtube" src="https://www.youtube.com/embed/D_avHhjjmtU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <button id="youtubeClose" onclick="youtubeButtonCLose()">buton</button>
</header>



<?php
include "_includes/footer.php";
?>

</body>
<script src="assets/js/script.js"></script>
</html>