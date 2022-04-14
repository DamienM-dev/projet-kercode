<?php


$title = "Vue produit";

ob_start();

?>

<section id="Vu_produit_dasboard">


    <div id="block_vu_produit_dasboard">
        <div id="Vu_produit_dasboard_inside">
             <div>
                <h3>nom:</h3>
                <p><?=$produit['name'] ?><p>
            </div>
            <div>
                <h3>description:</h3>
                <p><?=$produit['description'] ?></p>
            </div>

            <div>
                <h3>price:</h3>
                <p><?=$produit['price']?> €</p>
            </div>
        </div>

        <div>
            <img src="<?= $produit['img']?>" alt="<?=$produit['alt'] ?>">
        </div>
    </div>

    <button>
        <a href="indexAdmin.php?action=modifierProduitView&id=<?= $produit['id']?>">modifier</a>
    </button>
    
    

        <button type="button">
            <a href="indexAdmin.php?action=retourDashboard">dashboard</a>
        </button>

</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');
?>