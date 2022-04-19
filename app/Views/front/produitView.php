<?php

$title = "Nos produits";

ob_start();

?>

<section id="block_produits">

    <div id="block_inside_produits">

        <h1>Nos produits</h1>

        <div id="produits_laitier">


            <?php  foreach($produits as $produit) : ?>
                
            <div class="produit_laitier_inside">

                <img src="<?= $produit['img'] ?>" alt ="<?= $produit['alt'] ?>">
                <h2><?= $produit['name']?></h2>
                <p><?= $produit['price'] ?> €</p>
                <button class="button_ajout"><a href="#">Ajouter au panier</a></button>
                <div></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');

?>
