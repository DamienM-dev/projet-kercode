<?php

$title = "Accueil";

require_once 'app/Controllers/ControllerFront.php';

ob_start();

?>
<section id="block_image_parallax">


    <div id="block_absolute_image">
        <h1>Dayly Fresh est une association de producteur locaux</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam faucibus ante et.</p>
        <a href="index.php?page=aProposView" class="button">A propos</a>
    </div>

</section>

<section id="block_pourquoi">
    <h2>Nous choisir </h2>
    <div class="blocks_inside_pourquoi">
        <img src="app/Public/design/svg/nutrition/Color/Fruit.svg" alt="" class="image_pourquoi">
        <h3>Des produits de saisons</h3>
        <p>Pour votre plus grand plaisir, nous ne vendons que des produits de saison </p>
        <div class="design_block_hover">
            <a href="index.php?page=produitView" class="button">En savoir plus</a>
        </div>
    </div>

    <div class="blocks_inside_pourquoi">
        <img src="app/Public/design/svg/ecology/color/NoPesticides.svg" alt="" class="image_pourquoi">
        <h3>Des produits naturels</h3>
        <p>Ici nous n'utilisons aucun pesticide, aucun engrain, tout est naturel </p>
        <div class="design_block_hover">
            <a href="index.php?page=produitView" class="button">En savoir plus</a>
        </div>
    </div>

    <div class="blocks_inside_pourquoi">
        <img src="app/Public/design/svg/nutrition/Color/ProteinMeat.svg" alt="" class="image_pourquoi">
        <h3>Des produits de saisons</h3>
        <p>Pour votre plus grand plaisir, nous ne vendons que des produits de saison </p>
        <div class="design_block_hover">
            <a href="index.php?page=produitView" class="button">En savoir plus</a>
        </div>
    </div>
</section>

<section id="block_produits">
    <h2>Nos produits</h2>

    <div class="blocks_inside_produit">
        <figure>
            <img src="app/Public/design/images/fromage.jpg" alt="fromage" class="image_produits">
        </figure>
        <h3>Nos produits laitier</h3>
        <p>Vous trouverez un large choix de produits laitier</p>
    </div>

    <div class="blocks_inside_produit">
        <figure>
            <img src="app/Public/design/images/vegetaux.jpg" alt="fruit" class="image_produits">
        </figure>
        <h3>Nos fuits et légumes</h3>
        <p>Vous trouverez un large choix de fuits et légumes de saison</p>
    </div>

    <div class="blocks_inside_produit">
        <figure>
            <img src="app/Public/design/images/viande.jpg" alt="viande" class="image_produits">
        </figure>
        <h3>Nos viandes</h3>
        <p>Nos viandes sont issus de l'élevage familial.</p>
    </div>
</section>

<section id="slider-block">
    <h2>Les témoignages</h2>
    
    <div class="slider">


        <div>
            <img src="<?= $sliderImage[0]['url'] ?>" alt="<?= $sliderImage[0]['alt'] ?>" class="images_slider active">
            <!-- <i class="fa-solid fa-quote-left"></i> -->
        </div>

        <div>
            <img src="<?= $sliderImage[1]['url'] ?>" alt="<?= $sliderImage[1]['alt'] ?>" class="images_slider">
            <!-- <i class="fa-solid fa-quote-left"></i> -->
        </div>

        <div>
            <img src="<?= $sliderImage[2]['url'] ?>" alt="<?= $sliderImage[2]['alt'] ?>" class="images_slider">
            <!-- <i class="fa-solid fa-quote-left"></i> -->
        </div>

        <div class="suivant">
            <i class="fa-solid fa-circle-right"></i>
        </div>

        <div class="precedent">
            <i class="fa-solid fa-circle-left"></i>
        </div>

        <div id="block_absolute_image_testimonial">
            
    
            <div class="block_testimonials">
                <img src="<?= $sliderImage[0]['photo']?>" alt="<?= $sliderImage[0]['a'] ?>" class="photo_testimonials active">
                <p class="testimonials ">"<?= $sliderImage[0]['testimonial'] ?>"</p>
            </div>
            
            <div class="block_testimonials">
                <img src="<?= $sliderImage[1]['photo']?>" alt="<?= $sliderImage[1]['a'] ?>" class="photo_testimonials">
                <p class="testimonials hidden">"<?= $sliderImage[1]['testimonial'] ?>"</p>
            </div>
            
            <div class="block_testimonials">
                <img src="<?= $sliderImage[2]['photo']?>" alt="<?= $sliderImage[2]['a'] ?>" class="photo_testimonials">
                <p class="testimonials hidden">"<?= $sliderImage[2]['testimonial'] ?>"</p>
            </div>
        </div>

    </div>
</section>








<script src="app/Public/design/js/sliders.js"></script>
<?php
$content = ob_get_clean();
require('app/Views/template/base.php');

?>