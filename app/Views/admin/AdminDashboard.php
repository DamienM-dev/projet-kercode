<?php


$title = "Panneau administration";

ob_start();

?>

<section id="dashboard">
    <h1>Panneau administration</h1>

    <div>
        <h2>Liste des produits disponibles</h2>
        <button><a href="indexAdmin.php?page=ajouterProduitView">Ajouter</a></button>
    </div>

    <table>
        <tr>
            <th>Nom</th>
            <th>description</th>
            <th>prix</th>
            <th>Catégorie</th>
            <th>actions</th>
        </tr>

        <?php foreach($product as $afficheProduct) : ?>

            <tr>
                <td><?= $afficheProduct['name'] ?></td>
                <td><?= $afficheProduct['description'] ?></td>
                <td><?= $afficheProduct['price'] ?></td>
                <td><button><a href="indexAdmin.php?action=voirProduit&id=<?= $afficheProduct['id']?>">Voir</a></button></td>
                <td><button><a href="#">modifier</a></button></td>
                <td><button><a href="indexAdmin.php?action=deleteProduit&id=<?= $afficheProduct['id']?>">Supprimer</a></button></td>
            </tr>
            
          
        
           <?php endforeach; ?>

    </table>

</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');
?>