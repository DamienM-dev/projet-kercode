<?php


$title = "Liste des produits";

ob_start();

?>

<section id="Vu_produit_dasboard">


    <form action="indexAdmin.php?action=ajouterProduit" method="post" enctype="multipart/form-data">

    <h1>Ajouter un produit</h1>

 

        <div>
            <div>
                <label for="name">nom:</label>
                <input type="text" name="name" id="name" placeholder="nom" />

            <div>
                <label for="description">description:</label>
                <input type="text" name="description" id="description" placeholder="description"/>
            </div>

            <div>
                <label for="price">price:</label>
                <input type="number" name="price" id="price" placeholder="prix"/>
            </div>
  
            <div>
                <label for="categories">categories:</label>
                <select name="categories" id="categories">
                    <!-- NE FONCTIONNE PAS CAR AUCUNE ACTION DANS INDEX !!! -->
                    <?php foreach ($categories as $categorie) : ?>


                        <?php var_dump($categories) ?>
                        <option value ="<?=$categorie['id']?>"><?=$categorie['name']?></option>
                        
                   <?php endforeach;?>
                </select>
            </div>

            <div>
                <label for="img">images:</label>
                <input type="files" name="img" id="img"/>
            </div>

            <button type="submite"><a>soumettre</a></button>
            <button><a href="indexAdmin.php?action=retourDashboard">dashboard</a>
        </div>

    
    </form>

</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');
?>