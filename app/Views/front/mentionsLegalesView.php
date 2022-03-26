<?php

$title = "Mentions légales";

ob_start();

?>
<section id="block_mentions_legales">

    <h1>Nos mentions légales</h1>

    <p> La souscription aux services du Site et leur utilisation supposent la communication d'informations
        concernant l’Utilisateur. La Société rappelle que le but de la collecte de ces données est d’offrir à
        l’Utilisateur un meilleur service en améliorant la qualification de son besoin.
        La Société peut être amenée à transmettre certaines informations à des tiers, voir notre politique de
        confidentialité.</p>

    <p>Grâce à des fichiers (cookies) gérés par l’ordinateur de l’Utilisateur, la Société est à même de rassembler
        diverses informations concernant l'origine et la date des visites, le fournisseur d'accès, l'adresse IP de
        l'ordinateur ainsi que la traçabilité de la navigation sur le site, les pages vues et le temps passé sur le site,
        voir notre politique concernant les cookies.</p>

</section>





<?php
$content = ob_get_clean();
require('app/Views/template/base.php');

?>