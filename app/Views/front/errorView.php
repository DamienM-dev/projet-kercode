<?php
$title = "Erreur 404";

ob_start();
?>

<!-- contenu a remplir -->
<section id="block_erreur">

    <div id="block_image_404">
    <lottie-player src="app/Public/design/images/erreur-champs.json" autoplay loop></lottie-player>
        <div id="block_bouton_404">
            <h3>Nous somme entrain de travailler, revenez plus tard !</h3>
            <button>
                <a href="index.php?page=accueil">Retournez à l'accueil !<a>
            </button>
        </div>
    </div>

</section>
<?php
$content = ob_get_clean();

require_once('app/Views/template/base.php');
?>