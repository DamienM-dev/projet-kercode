<?php

require('Models/front/accueilModel.php');

$title = "Accueil";

ob_start();

?>
<section id="slider-block">
    <div class="slider">
        <?php while($slider_images = $response->fetch()) {
        ?><img src="<?= $slider_images['url'] ?>" alt="Vigne" class="images_slider active">
        <img src="<?= $slider_images['url'] ?>" alt="champ" class="images_slider">
        <img src="<?= $slider_images['url'] ?>" alt="herbe" class="images_slider">
        <?php }; ?>

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

require('base.php');

?>
