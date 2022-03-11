<?php
    $title = "Erreur 404";

    ob_start();
?>

<!-- contenu a remplir -->
<section id="block_erreur">

<div id="block_image_404">
    <img src="Public/design/images/pages-erreur-404.jpg">
    <div id="block_bouton_404">
        <h3>Besoin d'un coup de main ?</h3>
        <button>
            <a href="index.php?page=accueil">Retournez à l'accueil !<a>
        </button>
    </div>
</div>

</section>
<?php
    $content = ob_get_clean();

    require('Views/template/base.php');
?>