<?php include "_includes/navigation.php" ?>
<?php $listMovies= []; ?>
<!---------- YOUTUBE WITH BUTTON -------->
<section id="creed3">
   <button id="youtubeOn" onclick="youtubeButton()">buton</button>
    <div id="youtubeOn" onclick="youtubeButton()"></div>
    <iframe id="youtube" src="https://www.youtube.com/embed/D_avHhjjmtU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div id="youtubeClose" onclick="youtubeButtonCLose()"><span>Close</span></div>
</section>
<!----------END OF YOUTUBE-------->
<!----------TECHNICAL SHEET------->
    <section>
<div class="movieDescription">
    <img class="moviePoster" src ="assets/images/Capture d’écran 2023-03-09 à 19.09.27.png" alt="affiche-film-Creed 3">
    <div class ="synopsis">
        <h2>Synopsis</h2>
        <p>Idole de la boxe et entouré de sa famille, Adonis Creed n’a plus rien à prouver. Jusqu’au jour où son ami d’enfance, Damian, prodige de la boxe lui aussi, refait surface. A peine sorti de prison, Damian est prêt à tout pour monter sur le ring et reprendre ses droits. Adonis joue alors sa survie, face à un adversaire déterminé à l’anéantir.</p>
    </div>
    <div class="casting">
        <h2>Casting</h2>
        <p>1 mars 2023 en salle / 1h 57min / Drame</p>
        <p>De Michael B. Jordan</p>
        <p>Avec Michael B. Jordan, Tessa Thompson, Jonathan Majors</p>
    </div>
</div> <!----------END OF TECHNICAL SHEET------->

<h2>Galerie</h2>
<!---- Start of gallery------>
<div class="pictureGallery">
    <img src="assets/capture/3-2-1024x576.jpg" alt="personnages-terminator">
    <img src="assets/capture/0217fe3_1678181293153-telerama-016262-007.jpg" alt="enfant qui nage-avatar">
    <img src="assets/capture/anderson-dame-jonathan-majors-creed-3-scaled.jpeg" alt="guerre-avatar">
    <img src="assets/capture/creed3-rocky.jpg" alt="personnages qui volent-avatar">
    <img src="assets/capture/Creed-2-image.jpg" alt="viewpoint-avatar">
    <img src="assets/capture/creed-iii.jpg" alt="personnages qui volent-avatar">
</div>
<!------- End of gallery------->
<?php
include "_includes/footer.php";
?>