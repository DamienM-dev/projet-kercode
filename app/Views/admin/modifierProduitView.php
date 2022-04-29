<?php

$title = "modification produit";

ob_start();

?>

<section id="modifier_produit_dashboard">

<h1>Modification des produits</h1>

<form method="post" action="indexAdmin.php?action=modifierProduit&id=<?=$produit['id']?>">
    <div id="">
        <div id="block_modifier_produit">
             <div>
                <label for="name">nom:</label>
                <input type="text" id="name" name="name" value="<?=$produit['name'] ?>">
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
                <label for="description">description:</label>
                <input type="text" id="description" name="description" value="<?=$produit['description'] ?>">
            </div>

            <div>
                <label for="price">price:</label>
                <input type="float" id="price" name="price" value="<?=$produit['price']?> ">
            </div>
        </div>

        <div>
            <label for="img">images:</label>
            <input type="files" name="img" id="img" value="<?=$produit['img']?> "/>
        </div>
        <div>
            <label for="alt">alt:</label>
            <input type="text" name="alt" id="alt" value="<?=$produit['alt']?>"/>
        </div>

    </div>

    <button type="submit" >
        <a>modifier</a>
    </button>
    <button type="button" class="bouton_dashboard">
        <a href="indexAdmin.php?action=retourDashboard">dashboard</a>
    </button>
</form>

</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');
?>