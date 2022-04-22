<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a67cfefc1f.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@0.4.0/dist/lottie-player.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Space+Grotesk:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="app/Public/design/css/default.css">
    <title> Panneau administration </title>
</head>

<header id="header_dashboard">
   
    <nav class="navbar">
        
        <h2>Bonjour <?= $_SESSION['firstname'] ?></h2>
        <div id="bouton_admin_header">
            <button><a href="indexAdmin.php?action=pageCreationAdmin">Création administrateur</a></button>
            <button><a href="indexAdmin.php?action=deconnexionAdmin">déconnexion</a></button>
        </div>

        <input type="checkbox" id="btn">
        
    </nav>
</header>



<section id="dashboard">
    <h1>Panneau administration</h1>
    
    

    <div id="blocks_dashboard">
        <div class="block_nombre_dashboard" id="nombres_clients">
        <i class="fa-solid fa-user fa-2x"></i>
            <p><?php $count = $nombreClient->fetch() ?> <?=$count[0] ?> clients</p>
        </div>
 
        <div class="block_nombre_dashboard" id="emails">
        <i class="fa-solid fa-envelope fa-2x"></i>
            <p><?php $count = $emailCount->fetch() ?> <?=$count[0] ?> emails</p>
        </div>

        <div class="block_nombre_dashboard" id="nombres_produits">
        <i class="fa-solid fa-box fa-2x"></i>
            <p> <?php $count = $produitsCount->fetch() ?> <?=$count[0] ?>  produits</p>
        </div>
    </div>

    <div>
        <h2>Liste des produits disponibles</h2>
        <a href="indexAdmin.php?action=ajouterProduitView"><i class="fa-solid fa-circle-plus"></i></a>
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
                <td><?= $afficheProduct['category'] ?></td>
                <td>
                    <a href="indexAdmin.php?action=voirProduit&id=<?= $afficheProduct['id']?>"><i class="fa-solid fa-eye icone_tableau"></i></a>
                    <a href="indexAdmin.php?action=confirmationDelete&id=<?= $afficheProduct['id']?>"><i class="fa-solid fa-trash-can icone_tableau"></i></a>
                </td>
    
            </tr>
        
           <?php endforeach; ?>

    </table>

</section>


</html>