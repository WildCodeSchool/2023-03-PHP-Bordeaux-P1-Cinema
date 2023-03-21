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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <title>About</title>
</head>
<body>
    <header id ="about">
        <?php
        include "_includes/navigation.php";
        ?>
    </header>
    <!--Début de la page About-->
    <main>
        <!--Début du texte de présentation-->
        <section class ="cinemaStory">
            <p>Le Wild Cinéma est né grâce à un homme, un grand amoureux des grands films : Jean Wild. Le petit Jean a vu le jour dans une petite ville nommée Bordeaux, et a baigné dans la culture cinématographique grâce à son grand-père.</p>
            <p>Trois ans avant l'ouverture du cinéma, en 1903, Jean Wild était devenu un grand homme, il décida de retrouver le lieu exact de sa naissance pour ériger un édifice à sa mesure. Après de nombreuses recherches c'est ici au ... que cet édifice est né.</p>
            <p>Grâce à quels députés corrompus, Jean obtient le permis de construire.Le cinéma est monté petit à petit, pierre par pierre. Mais après quelques ouvriers morts d'épuisement et des fusiades de part et d'autre, Jean Wild est fier de vous accueillir dans son magnifique cinéma !</p>
        </section>

        <section class="contactDetails">
            <article class="carte-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9511.121126789041!2d-0.5667852967309899!3d44.86894674036086!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527cba74d1bdf%3A0xb92bcdcad0920688!2sWild%20Code%20School!5e0!3m2!1sfr!2sfr!4v1678581595970!5m2!1sfr!2sfr"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </article>

            <article>
                <h2>Coordonnées</h2>
                <p>THE WILD CINEMA</p>
                <p>171 rue Laucien Faure , 33300 Bordeaux</p>

                <p>
                    <a href="mailto:thewildcinema@gmail.com">Mail : thewildcinema@gmail.com</a>
                </p>
                <p>répondeur :<a href="tel:+33556782661"> 05 56 78 26 61 </a></p>


                <h2>Tarifs</h2>
                <p>Tarif plein – 7,50€</p>
                <p>Tarif réduit – 5,80€ (Moins de 18 ans, étudiants, séniors (+ de 65 ans), handicapés (+ un accompagnateur), familles nombreuses, demandeurs d’emploi, (Justificatifs obligatoires)</p>
                <p>Tarif -14ans & RSA – 4€ (Justificatifs obligatoires)</p>
                <p>Abonnement 53€ les 10 places (2€ la carte)</p>
                <p>Happy hour du lundi au vendredi entre 17h & 19h – 5,80€</p>
            </article>

        </section>
    <section class="contactGallery">
        <h2>Nos salles</h2>
        <article>
            <?php  $halls = [
                "royalRoom"=>"La salle royal de The Wild Cinema",
                "blueRoom"=>"La salle bleu de The Wild Cinema",
                "theHall"=>"Le hall d'entrée de The Wild Cinema"];
            foreach ($halls as $key=>$alt) : ?>
                <img src="../../assets/images/<?= $key; ?>.jpg" alt="<?= $alt; ?>">

            <?php endforeach; ?>
        </article>
    </section>
</main>
</body>
</html>