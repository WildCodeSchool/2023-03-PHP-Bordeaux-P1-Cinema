<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/main.css">

    <title>Index</title>
</head>

<header id="home">
    <?php
    include "_includes/navigation.php";
    ?>
</header>

<body>
<?php
$listMovies= []
?>

<main>
    <section class="oldMovieGallery">
        <h2>Nos salles</h2>
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
    </section>
    <?php
    include "_includes/slide.php";
    ?>
</main>

<?php
include "_includes/footer.php";
?>
<script src="script.js"></script>
</body>
</html>