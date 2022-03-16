<?php

$title = "Accueil";

ob_start();

?>
<section id="block_accueil">
    <div class="slider">

   
             <!-- =======debut block slider======= -->

        <div>
            <img src="<?= $images[0]['url'] ?>" alt="<?= $images[0]['alt'] ?>"class="images_slider active" >
        </div>

        <div>
            <img src="<?= $images[1]['url'] ?>" alt="<?= $images[1]['alt'] ?>"class="images_slider">
        </div>

        <div>
            <img src="<?= $images[2]['url'] ?>" alt="<?= $images[2]['alt'] ?>"class="images_slider">
        </div>

        <div class="suivant">
        <i class="fa-solid fa-circle-right"></i>
        </div>

        <div class="precedent">
        <i class="fa-solid fa-circle-left"></i>
        </div>
        <div id="block_absolute_image">
            <h1>Dayly Fresh est une association de producteur locaux</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam faucibus ante et.</p>
            <button>A propos</button>
        </div>
    </div>

     <!-- =======debut block pourquoi======= -->

    <div id="block_pourquoi">
        <h2>Pourquoi nous choisir ?</h2>
        <div class="blocks_inside_pourquoi">
            <img src="Public\design\images\agriculture.png" alt="" class="image_pourquoi">
            <h3>Des produits de saisons</h3>
            <p>Pour votre plus grand plaisir, nous ne vendons que des produits de saison  </p>
            <div class="block_hover">
                <button>En savoir plus</button>
            </div>
        </div>

        <div class="blocks_inside_pourquoi">
            <img src="Public\design\images\agriculture.png" alt="" class="image_pourquoi">
            <h3>Des produits naturels</h3>
            <p>Ici nous n'utilisons aucun pesticide, aucun engrain, tout est naturel </p>
            <div class="block_hover">
                <button>En savoir plus</button>
            </div>
        </div>

        <div class="blocks_inside_pourquoi">
            <img src="Public\design\images\agriculture.png" alt="" class="image_pourquoi">
            <h3>Des produits de saisons</h3>
            <p>Pour votre plus grand plaisir, nous ne vendons que des produits de saison  </p>
            <div class="block_hover">
                <button>En savoir plus</button>
            </div>
        </div>
    </div>
        <!-- =======debut block produit======= -->

    <div id="block_produit">

    <h2>Nos produits</h2>
        <div class="blocks_inside_produit">

            <figure>
                <img src="Public\design\images\fromage.jpg" alt="Fromages produits dans nos fermes" class="images_produit">
            </figure>
            <h3>Produits laitiers</h3>
            <p>Grace aux laits de notre ferme, une large gamme de produits vous sont proposés</p>
        </div>

        <div class="blocks_inside_produit">
           
            <figure>
                <img src="Public\design\images\vegetaux.jpg" alt="fruits et légumes de saison" class="images_produit">
            </figure>
            <h3>Fruits et légumes</h3>
            <p>Grace aux laits de notre ferme, une large gamme de produits vous sont proposés</p>
        </div>

        <div class="blocks_inside_produit">
        
            <figure>
                <img src="Public\design\images\viande.jpg" alt="steack de grande fraicheur" class="images_produit">
            </figure>
            <h3>Nos viandes</h3>
            <p>Grace aux laits de notre ferme, une large gamme de produits vous sont proposés</p>
    
        </div>

    </div>



</section>

<script src="Public/design/js/sliders.js"></script>
<?php
$content = ob_get_clean();
require('Views/template/base.php');

?>
