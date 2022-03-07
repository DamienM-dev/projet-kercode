<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a67cfefc1f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Public/design/css/default.css">
    <title> <?= $title ?> </title>
</head>

<header>
    <div id="connexion">
        <a href="#">connexion</a>
    </div>

    <nav class="navbar">
        <figure>
            <a href="index.php">
                <img src="../Public/design/SVG/logo.svg" alt="Logo">
            </a>
        </figure>
        <h1>Daily fresh</h1>

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
                <a href="index.php">accueil</a>
            </li>
            <li class="nav-item">
                <a href="activites/html/activites.php">a propos</a>
            </li>
            <li class="nav-item">
                <a href="#">produit</a>
            </li>
            <li class="nav-item">
                <a href="contact/contact.php">contact</a>
            </li>
        </ul>
    </nav>

    <div class="divider"></div>
</header>
<body>
    
    <?= $content ?>
    <script src="Public/design/js/<?=$Javascript?>"></script>
</body>

<footer>

</footer>

</html>