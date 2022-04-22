<!DOCTYPE html>
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
    <title> <?= $title ?> </title>
</head>
<body>
    <div id="container">

<header>
    <div id="connexion">
        <a href="index.php?page=login">inscription</a>
        <a href="index.php?page=pageConnexionUser">Mon compte</a>
        <a href="index.php?page=pageConnexionAdmin">admin</a>
    </div>

    <nav class="navbar">
        <figure>
            <a href="index.php">
                <img src="app/Public/design/images/logo.svg" alt="Logo" id="logo">
            </a>
        </figure>
        <h2>Daily fresh</h2>

        <label for="btn">
            <svg viewbox="0 0 100 80" width="40" height="40" class="icon">
                <rect width="100" height="15"></rect>
                <rect y="35" width="100" height="15"></rect>
                <rect y="70" width="100" height="15"></rect>
            </svg>
        </label>

        <input type="checkbox" id="btn">
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="index.php" class="liens_menu">accueil</a>
            </li>
            <li class="nav-item">
                <a href="index.php?page=aProposView" class="liens_menu">a propos</a>
            </li>
            <li class="nav-item">
                <a href="index.php?page=produitView" class="liens_menu">produit</a>
            </li>
            <li class="nav-item">
                <a href="index.php?page=contact" class="liens_menu">contact</a>
            </li>
        </ul>
        <a href="index.php?page=pagePanier"><i class="fa-solid fa-basket-shopping fa-2x"></i></a>
    </nav>
</header>


        
        <?= $content ?>
        
    </div>
    <script src="app/Public/design/js/panier.js"></script>
    
    <footer>

        <div id="logo_reseau_sociaux">
        <a href="#"><i class="fa-brands fa-twitter logo_footer fa-xl"></i></a>
        <a href="#"><i class="fa-brands fa-facebook-f logo_footer fa-xl"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin-in logo_footer fa-xl"></i></a>
        <a href="#"><i class="fa-brands fa-instagram-square logo_footer fa-xl"></i></a>
    </div>
    
    <div id="block_copyright">
        <p><a href="index.php?page=mentionsLegalesView">Mentions légales</a></p>
        <p><a href="index.php?page=donneesPersoView">Données personelles</a></p>
        <p>© Daily Fresh</p>
    </div>
    
</footer>
</body>

</html>