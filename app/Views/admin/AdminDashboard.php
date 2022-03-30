<?php
session_start();

$title = "Panneau administration";

ob_start();

?>

<section id="dashboard">
    <h1>Panneau administration</h1>

    <div>
        <h2></h2>
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
        <tr>
            <td> <?= $product['name'] ?></td>
            <td><?= $product['description'] ?></td>
            <td><?= $product['price'] ?>€</td>
            <td><?= $product['categories'] ?></td>
            <td>
                <button><a>modifier</a></button>
                <button><a>modifier</a></button>
                <button><a>ajouter</a></button>
            </td>
        </tr>
    </table>

</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');

?>