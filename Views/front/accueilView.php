<?php

require_once('Models/front/accueilModel.php');

$title = "Accueil";

ob_start();

?>
<section id="slider-block">
    <div class="slider">
    
        <img src="<?= $url_images ?>" alt="Vigne" class="images_slider active">
        <img src="<?= $url_images ?>" alt="champ" class="images_slider">
        <img src="<?= $url_images ?>" alt="herbe" class="images_slider">

        <div class="suivant">
        <i class="fa-solid fa-circle-right"></i>
        </div>

        <div class="precedent">
        <i class="fa-solid fa-circle-left"></i>
        </div>
    </div>
</section>
<?php

$content = ob_get_clean();
$Javascript = 'sliders.js';


require('Views/template/base.php');

?>
