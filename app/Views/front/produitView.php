<?php
$title = "Nos produits";

ob_start();

?>

<section id="block_produitsView">

    <div id="block_inside_produits">

        <h1>Nos produits</h1>

        <div id="produits_laitier">


            <?php  foreach($produits as $produit) : ?>
                
            <div class="produit_laitier_inside">

                <img src="<?= $produit['img'] ?>" alt ="<?= $produit['alt'] ?>">
                <h2><?= $produit['name']?></h2>
                <p><?= $produit['description']?></p>
                <p><?= $produit['price'] ?> €</p>
            <a href="#" class="button_ajout button" title="ajouter panier" data-product='{"id":<?= $produit["id"]; ?>}'>Ajouter au panier</a>

            </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');

?>
