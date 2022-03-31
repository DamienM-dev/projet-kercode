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

          while ($product = $reqListe->fetch()) {
            <tr>
                <td>   </td>
                <td> $product['description'] </td>
                <td> $product['price'] €</td>
                <td> $product['categories'] </td>
                <td>
                    <button><a>modifier</a></button>
                    <button><a>modifier</a></button>
                    <button><a>ajouter</a></button>
                </td>
            </tr>
        };

       <?php while($product = $reqListe->fetch()) {
                            echo '<tr>';
                            echo '<td>'. $product['name'] . '</td>';
                            echo '<td>'. $product['description'] . '</td>';
                            echo '<td>'. $product['categories'] . '</td>';
                
                            echo '<button><a href="view.php?id='.$product['id'].'">Voir</a></button>';
                            echo '<button><a href="update.php?id='.$product['id'].'"> Modifier</a></button>';
                            echo '<button><a href="delete.php?id='.$product['id'].'">Supprimer</a></button>';
                            echo '</td>';
                            echo '</tr>';
                        };?>



    </table>

</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');
?>