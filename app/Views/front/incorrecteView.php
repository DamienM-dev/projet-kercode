<?php

$title = "Identifiants inccorectes";

ob_start();

?>
<section id="block_identifiant_incorectes">

    <h1>Vos identifiants sont incorrectes</h1>

    <a href="index.php">retour à l'accueil</a>

    

</section>





<?php
$content = ob_get_clean();
require('app/Views/template/base.php');

?>