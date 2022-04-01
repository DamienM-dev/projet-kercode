<?php


$title = "Liste des produits";

ob_start();

?>

<section id="Vu_produit_dasboard">


    <form action="indexAdmin.php?page=ajouterProduit" method="post" enctype="multipart/form-data">

        <div>
            <div>
                <label for="name">nom:</label>
                <input type="text" name="name" id="name" placeholder="nom" value="<?= $name ?>"><?= ' ' . $product['name'] ?></input>
            </div>

            <div>
                <label for="description">description:</label>
                <input type="text" name="description" id="description" placeholder="description" value="<?= $description ?>"><?= ' ' . $product['description'] ?></input>
            </div>

            <div>
                <label for="price">price:</label>
                <input type="number" name="price" id="price" placeholder="prix" value="<?= $price ?>"><?= ' ' . $product['price'] ?></input>
            </div>

            <div>
                <label for="categories">categories:</label>
                <select name="categories" id="categories">
                    <!-- A finir -->
                </select>
            </div>
            <button><a>dashboard</a>
        </div>

    </form>

</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');
?>