<?php include "_includes/navigation.php" ?>
    <!--Début de la page About-->
<section id="about">
</section>
        <!--Début du texte de présentation-->
        <section class ="cinemaStory">
            <p class="slogan"> "The Wild Cinema est un cinéma associatif crée par la WILD CODE SCHOOL le 28 février 2023.
                JS, DATA ANALYST et PHP ont travaillés main dans la main afin de proposer des films actuels ainsi que des films intergénérationels, à des tarifs qui ne connaissent pas l’inflation!"</p>
        </section>

        <section class="contactDetails">
            <article class="carte-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9511.121126789041!2d-0.5667852967309899!3d44.86894674036086!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527cba74d1bdf%3A0xb92bcdcad0920688!2sWild%20Code%20School!5e0!3m2!1sfr!2sfr!4v1678581595970!5m2!1sfr!2sfr"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </article>

            <article>
                <h3>Coordonnées</h3>
                <p>THE WILD CINEMA</p>
                <p>171 rue Laucien Faure , 33300 Bordeaux</p>

                <p>
                    <a href="mailto:thewildcinema@gmail.com">Mail : thewildcinema@gmail.com</a>
                </p>
                <p>répondeur :<a href="tel:+33556782661"> 05 56 78 26 61 </a></p>


                <h3>Tarifs</h3>
                <p>Tarif plein – 7,50€</p>
                <p>Tarif réduit – 5,80€ (Moins de 18 ans, étudiants, séniors (+ de 65 ans), handicapés (+ un accompagnateur), familles nombreuses, demandeurs d’emploi, (Justificatifs obligatoires)</p>
                <p>Tarif -14ans & RSA – 4€ (Justificatifs obligatoires)</p>
                <p>Abonnement 53€ les 10 places (2€ la carte)</p>
                <p>Happy hour du lundi au vendredi entre 17h & 19h – 5,80€</p>
            </article>

        </section>
    <section class="contactGallery">
        <h3>Nos salles</h3>
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
<?php
include "_includes/footer.php";
?>