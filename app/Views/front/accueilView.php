<?php

$title = "Accueil";

ob_start();

?>
<section id="block_image_parallax">


    <div id="block_absolute_image">
        <h1>Dayly Fresh est une association de producteur locaux</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam faucibus ante et.</p>
        <button><a href="index.php?page=aProposView">A propos</a></button>
    </div>
    </div>

</section>

<section id="block_pourquoi">
    <h2>Pourquoi nous choisir</h2>
    <div class="blocks_inside_pourquoi">
        <img src="app/Public/design/images/agriculture.png" alt="" class="image_pourquoi">
        <h3>Des produits de saisons</h3>
        <p>Pour votre plus grand plaisir, nous ne vendons que des produits de saison </p>
        <div class="design_block_hover">
            <button><a href="index.php?page=produitView">En savoir plus</a></button>
        </div>
    </div>

    <div class="blocks_inside_pourquoi">
        <img src="app/Public/design/images/agriculture.png" alt="" class="image_pourquoi">
        <h3>Des produits naturels</h3>
        <p>Ici nous n'utilisons aucun pesticide, aucun engrain, tout est naturel </p>
        <div class="design_block_hover">
            <button><a href="index.php?page=produitView">En savoir plus</a></button>
        </div>
    </div>

    <div class="blocks_inside_pourquoi">
        <img src="app/Public/design/images/agriculture.png" alt="" class="image_pourquoi">
        <h3>Des produits de saisons</h3>
        <p>Pour votre plus grand plaisir, nous ne vendons que des produits de saison </p>
        <div class="design_block_hover">
            <button><a href="index.php?page=produitView">En savoir plus</a></button>
        </div>
    </div>
</section>

<section id="block_produits">
    <h2>Nos produits</h2>

    <div class="blocks_inside_produit">
        <figure>
            <img src="app/Public/design/images/fromage.jpg" class="image_produits">
        </figure>
        <h3>Nos produits laitier</h3>
        <p>Vous trouverez un large choix de produits laitier</p>
    </div>

    <div class="blocks_inside_produit">
        <figure>
            <img src="app/Public/design/images/vegetaux.jpg" class="image_produits">
        </figure>
        <h3>Nos fuits et légumes</h3>
        <p>Vous trouverez un large choix de fuits et légumes de saison</p>
    </div>

    <div class="blocks_inside_produit">
        <figure>
            <img src="app/Public/design/images/viande.jpg" class="image_produits">
        </figure>
        <h3>Nos viandes</h3>
        <p>Nos viandes sont issus de l'élevage familial.</p>
    </div>
</section>

<section id="slider-block">
    <div class="slider">

        <div>
            <img src="<?= $testimonial[0]['url'] ?>" alt="<?= $testimonial[0]['alt'] ?>" class="images_slider active">
            <i class="fa-solid fa-quote-left"></i>
            <img src="<?= $testimonial[0]['photo'] ?>">
        </div>

        <div>
            <img src="<?= $testimonial[1]['url'] ?>" alt="<?= $testimonial[1]['alt'] ?>" class="images_slider">
            <i class="fa-solid fa-quote-left"></i>
            <img src="<?= $testimonial[1]['photo'] ?>">
        </div>

        <div>
            <img src="<?= $testimonial[2]['url'] ?>" alt="<?= $testimonial[2]['alt'] ?>" class="images_slider">
            <i class="fa-solid fa-quote-left"></i>
            <img src="<?= $testimonial[2]['photo'] ?>">
            <p><?= $testimonial[2]['testimonial'] ?></p>
        </div>

        <div class="suivant">
            <i class="fa-solid fa-circle-right"></i>
        </div>

        <div class="precedent">
            <i class="fa-solid fa-circle-left"></i>
        </div>
        <div id="block_absolute_image">
            <h1>Dayly Fresh est une association de producteur locaux</h1>
            <p><?= $testimonial[0]['testimonial'] ?></p>

        </div>
    </div>
</section>



<script src="app/Public/design/js/sliders.js"></script>
<?php
$content = ob_get_clean();
require('app/Views/template/base.php');

?>