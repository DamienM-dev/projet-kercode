<?php


$title = "Panneau administration";

ob_start();

?>

<section id="dashboard">
    <h1>Panneau administration</h1>

    <div>
        <h2>Liste des produits disponibles</h2>
        <button><a href="indexAdmin.php?action=ajouterProduit">Ajouter</a></button>
    </div>

    <table>
        <tr>
            <td>Nom</td>
            <td>description</td>
            <td>prix</td>
            <td>Catégorie</td>
            <td>actions</td>
        </tr>

        <?php
        while ($product = $product->fetch()) {

            echo '<tr>';
            echo   '<td>' . $product['name'] . '</td>';
            echo   '<td>' . $product['description'] . '</td>';
            echo   '<td>' . $product['price'] . '</td>';
            echo   '<td>' . $product['categories'] . '</td>';

            echo  '<button><a href="indexAdmin.php?page=ViewProductAdmin&id=' . $product['id'] . '">Voir</a></button>';
            echo  '<button><a href="indexAdmin.php?page=deleteProductAdmin&id=' . $product['id'] . '">Supprimer</a></button>';
            echo    '</td>';
            echo    '</tr>';
        }
        ?>
    </table>

</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');
?>