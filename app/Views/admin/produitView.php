<?php


$title = "Liste des produits";

ob_start();

?>

<section id="Vu_produit_dasboard">


    <form>
        <div>
        <?php foreach($produits as $Produit) : ?>
            <div>
                <label>nom:</label>
                <p><?=$produit['name'] ?></p>
            </div>

            <div>
                <label>description:</label>
                <p><?=$produit['description'] ?></p>
            </div>

            <div>
                <label>price:</label>
                <p><?=$produit['price'] ?></p>
            </div>
            <button><a>dashboard</a>
            <?php endforeach; ?>
        </div>
    </form>

</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');
?>