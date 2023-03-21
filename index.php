<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/modules/cf-variables.css">
    <link rel="stylesheet" href="assets/css/modules/cf-navigation.css">
    <link rel="stylesheet" href="assets/css/modules/cf-index.css">
    <link rel="stylesheet" href="assets/css/modules/cf-slide.css">
    <link rel="stylesheet" href="assets/css/modules/cf-footer.css">

    <title>Index</title>
</head>
<body>
<?php
$listMovies= []
?>
<header id="home">
<?php
include "_includes/navigation.php";
?>
</header>
<main>
    <!---------------Classic Movie----------->
    <section class="oldMovieGallery">
        <h2>Nos classiques</h2>
        <article>
            <?php  $OldMovies = [
                "matrix.jpg"=>"Affiche du film Matrix",
                "GoneWithTheWind.jpg"=>"Affiche du film Autant en emporte le vent",
                "terminator2.jpg"=>"Affiche du film Terminator 2",
                "the5Element.jpg"=>"Affiche du film le 5e Elément"];
            foreach ($OldMovies as $key=>$alt) : ?>
                <img src="../../assets/images/<?= $key ?>" alt="<?= $alt ?>">

            <?php endforeach; ?>
        </article>
        <!---------------End of Classic Movie----------->
    </section>
    <!-----------SLIDE--------->
    <?php
    include "_includes/slide.php";
    ?>
    <!----------- END OF SLIDE--------->

    <img class="promotion" src="assets/images/pop-corn.jpeg">
</main>

<?php
include "_includes/footer.php";
?>
<script src="script.js"></script>
</body>
</html>