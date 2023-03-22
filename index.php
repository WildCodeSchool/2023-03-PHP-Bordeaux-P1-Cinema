<?php include "_includes/navigation.php" ?>
<?php $listMovies= []; ?>
    <!-----------SLIDE--------->
<?php include "_includes/slide.php"; ?>
    <!----------- END OF SLIDE--------->

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
    <img class="promotion" src="assets/images/pop-corn.jpeg">
<?php include "_includes/footer.php"; ?>