<?php


$title = "Panneau administration";

ob_start();

?>

<section id="dashboard">
    <h1>Panneau administration</h1>

    <div>
        <h2>Liste des produits disponibles</h2>
        <button><a>Ajouter</a></button>
    </div>

    <table>
        <tr>
            <td>Nom</td>
            <td>description</td>
            <td>prix</td>
            <td>Catégorie</td>
            <td>actions</td>
        </tr>

       <?php while($product = $reqListe->fetch()) { ?>
                            <?= '<tr>';?>
                            <?= '<td>'. $product['name'] . '</td>';?>
                            <?= '<td>'. $product['description'] . '</td>';?>
                            <?= '<td>'. $product['categories'] . '</td>';?>
                
                            <?= '<button><a href="view.php?id='.$product['id'].'">Voir</a></button>';?>
                            <?= '<button><a href="update.php?id='.$product['id'].'"> Modifier</a></button>';?>
                            <?= '<button><a href="delete.php?id='.$product['id'].'">Supprimer</a></button>';?>
                            <?= '</td>';?>
                            <?= '</tr>';?>
                        <?php };?>

    </table>

</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');
?>