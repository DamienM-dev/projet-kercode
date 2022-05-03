<?php


$title = "Ajout des produits";

ob_start();

?>

<section id="ajouter_produit_dasboard">


    <form action="indexAdmin.php?action=ajouterProduit" method="post" enctype="multipart/form-data" id="ajouter_form">

        <h1>Ajouter un produit</h1>
        
            <div id="ajouter_form_inside">
                <div>
                    <label for="name">nom:</label>
                    <input type="text" name="name" id="name" placeholder="nom" />

                <div>
                    <label for="description">description:</label>
                    <input type="text" name="description" id="description" placeholder="description"/>
                </div>

                <div>
                    <label for="price">price:</label>
                    <input type="number" step="0.01" name="price" id="price" placeholder="prix"/>
                </div>
    
                <div>
                    <label for="categories">categories:</label>
                    <select name="categories" id="categories">
                
                        <?php foreach ($categories as $categorie) : ?>

                            <option value ="<?=$categorie['id']?>"><?=$categorie['name']?></option>
                            
                    <?php endforeach;?>
                    </select>
                </div>

                <div>
                    <label for="img">images:</label>
                    <input type="files" name="img" id="img"/>
                </div>
                <div>
                    <label for="alt">alt:</label>
                    <input type="text" name="alt" id="alt"/>
                </div>


                <button type="submit">soumettre</button>
                <button><a href="indexAdmin.php?action=retourDashboard">dashboard</a></button>
            </div>

    
    </form>

</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');
?>