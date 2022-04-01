<?php


$title = "Liste des produits";

ob_start();

?>

<section id="Vu_produit_dasboard">


    <form>

        <div>
            <div>
                <label>nom:</label>
                <p><?= ' ' . $product['name'] ?></p>
            </div>

            <div>
                <label>description:</label>
                <p><?= ' ' . $product['description'] ?></p>
            </div>

            <div>
                <label>price:</label>
                <p><?= ' ' . $product['price'] ?></p>
            </div>
            <button><a>dashboard</a>
        </div>

    </form>

</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');
?>