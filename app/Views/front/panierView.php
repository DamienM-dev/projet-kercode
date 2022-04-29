<?php

$title = "Mon panier";

ob_start();

?>

<section id="block_panier">

    
<div id="block_titre_panier">
    <h2 id="titre_panier">Merci pour vos achats !</h2>
</div>
<div id="panier_fiche">
    <div id="inject_JS">
        <div id="panier_produit">
            <div id="block_image">
                <lottie-player src="app/Public/design/images/product.json" autoplay loop id="image_panier"></lottie-player>
            </div>
            <div id="block_produit">
                <h1>Produits</h1>
                <h3>nom</h3>
                <p>Quantité</p>
            </div>
            <div id="block_quantite_produit">
                <div>
                    <button class="quantity_modficiation">-</button>
                    <input type="text" class="quantity" value=0>
                    <button class="quantity_modficiation">+</button>
                </div>
                <div>
                    <p>prix total</p>
                </div>
            </div>
        </div>
    </div>
    <div id="block_recap">
        <h2>racap</h2>
        <div>
            <p id="nbrProduit">0 produits</p>
            <p id="prixTotal">prix produits</p>
        </div>
        <button>Valider</button>
    </div>
</div>


</section>




<?php
$content = ob_get_clean();
require('app/Views/template/base.php');

?>

