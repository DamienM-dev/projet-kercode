<?php

$title = "Nos produits";

ob_start();

?>

<section id="block_produits">

    <div id="block_inside_produits">

        <h1>Nos produits</h1>

        <div id="produits_laitier">


            <div class="produit_laitier_inside">

                <?php foreach($produits as $produit) : ?>
                <img src=<?= $produit->returnImg() ?> alt =<? $produit->returnAlt() ?>>
                <h3><?= $produit->returnName()?></h3>
                <p><?= $produit->returnPrice() ?></p>
                <button><a href="#">Ajouter au panier</a></button>
            </div>

            <?php endforeach; ?>

        </div>

    </div>



</section>





<?php
$content = ob_get_clean();
require('app/Views/template/base.php');

?>
