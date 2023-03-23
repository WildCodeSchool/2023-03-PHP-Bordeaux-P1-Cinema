<?php include "_includes/navigation.php" ?>
<?php $listMovies= []; ?>
    <!---------- YOUTUBE WITH BUTTON -------->
    <section id="monCrime">
        <div id="youtubeOn" onclick="youtubeButton()"></div>
        <iframe  id="youtube" src="https://www.youtube.com/embed/PaNkAPIUvpA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

        <div id="youtubeClose" onclick="youtubeButtonCLose()"><span>Close</span></div>
    </section>
    <!----------END OF HEADER-------->

    <!---Movie description--->
    <div class="movieDescription">
        <img class="moviePoster" src ="assets/images/Mon_Crime.jpg" alt="affiche-film-Mon Crime">
        <div class ="synopsis">
            <h2>Synopsis</h2>
            <p>Dans les années 30 à Paris, Madeleine Verdier, jeune et jolie actrice sans le sou et sans talent, est accusée du meurtre d’un célèbre producteur. Aidée de sa meilleure amie Pauline, jeune avocate au chômage, elle est acquittée pour légitime défense. Commence alors une nouvelle vie, faite de gloire et de succès, jusqu’à ce que la vérité éclate au grand jour…</p>
        </div>
        <div class="casting">
            <h2>Casting</h2>
            <p>8 mars 2023 en salle / 1h 42min / Drame</p>
            <p>De François Ozon</p>
            <p>Avec Nadia Tereszkiewicz, André Dussolier, Dany Boon, Fabrice Lucchini, Isabelle Hupert</p>
        </div>
    </div>

    <!----------End of movie description------->
    <!--<h2>Galerie</h2>
        <!- Start of gallery------>
    <!-- <div class="pictureGallery">
         <img src="assets/capture/640611b61a5bf_2236421.jpg" alt="personnages-avatar">
         <img src="assets/capture/870x489_sc_mon-crime-ozon.jpg" alt="enfant qui nage-avatar">
         <img src="assets/capture/870x489_photo-04.jpg" alt="guerre-avatar">
         <img src="assets/capture/B9733489904Z.1_20230217165047_000+GARM7RVN2.2-0.jpg" alt="personnages qui volent-avatar">
         <img src="assets/capture/2940301_1678786575288-telerama-016266-012.jpg" alt="viewpoint-avatar">
         <img src="assets/capture/mon-crime-3.jpeg" alt="personnages qui volent-avatar">
     </div>
     <!- End of gallery------->

<?php include "_includes/footer.php";?>