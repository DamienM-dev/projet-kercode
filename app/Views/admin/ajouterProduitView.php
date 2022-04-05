<?php


$title = "Liste des produits";

ob_start();

?>

<section id="Vu_produit_dasboard">


    <form action="indexAdmin?action=ajouterProduit" method="post" enctype="multipart/form-data">

    <h1>Ajouter un produit</h1>

    <?php foreach ( $ajouterProduit as $product) :?>

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
                <input type="number" name="categories" id="categories"><?= ' ' . $product['categories'] ?></input>
            </div>
            
            <div>
                <label for="categories">categories:</label>
                <select name="categories" id="categories">
                    <!-- A finir -->
                </select>
            </div>

            <div>
                <label for="img">images:</label>
                <input type="files" name="img" id="img"><?= ' ' . $product['img'] ?></input>
            </div>

            <button type="substr"><a>soumettre</a></button>
            <button><a>dashboard</a>
        </div>

        <?php endforeach; ?>

    </form>

</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');
?>