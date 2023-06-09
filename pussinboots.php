<?php include "_includes/navigation.php" ?>
<?php $listMovies= []; ?>
    <!---------- YOUTUBE WITH BUTTON -------->
    <section id="pussinboots">
        <div id="youtubeOn" onclick="youtubeButton()"></div>
        <iframe id="youtube" src="https://www.youtube.com/embed/7NycjpBa438" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div id="youtubeClose" onclick="youtubeButtonCLose()"><span>Close</span></div>
    </section>
    <!----------END OF HEADER-------->
    <!---Movie description--->
    <div class="movieDescription">
        <img class="moviePoster" src ="assets/images/Capture d’écran 2023-03-15 à 14.49.12.png" alt="affiche-film-Chat potté 2">
        <div class ="synopsis">
            <h2>Synopsis</h2>
            <p>Le Chat botté découvre que sa passion pour l'aventure et son mépris du danger lui ont coûté cher : il a épuisé huit de ses neuf sans s'en rendre compte.<br> Afin de se remettre sur pied, notre héros poilu se lance littéralement dans la quête de sa vie. Il s'embarque dans une aventure épique aux confins de la Forêt Noire afin de dénicher la mythique étoile magique, la seule chose qui puisse lui rendre ses vies perdues.</p>
        </div>
        <div class="casting">
            <h2>Casting</h2>
            <p>7 décembre 2022 en salle / 1h 42min / Film animation</p>
            <p>De Joel Crawford</p>
            <p>Avec Antonio Banderas , Salma Hayek, Florence Pugh, Harvey Guillén, Olivia Colman</p>
        </div>
    </div>
    <!----------End of movie description------->

    <!--<h2>Galerie</h2>
    <!- Start of gallery------>
    <!--<div class="pictureGallery">
        <img src="assets/capture/chat1.jpeg" alt="personnages-avatar">
        <img src="assets/capture/chat2.jpeg" alt="enfant qui nage-avatar">
        <img src="assets/capture/chat3.jpeg" alt="guerre-avatar">
        <img src="assets/capture/chat4.jpeg" alt="personnages qui volent-avatar">
        <img src="assets/capture/chat5.jpeg" alt="viewpoint-avatar">
        <img src="assets/capture/fde1a2ac5c.jpg" alt="le méchant">
    </div>
    <!- End of gallery------->

<?php include "_includes/footer.php";?>