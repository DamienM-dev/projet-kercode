<?php

$title = "Accueil";

ob_start();

?>
<section id="slider-block">
    <div class="slider">

   

        <img src="<?= $images[0]['url'] ?>" alt="<?= $images[0]['alt'] ?>" class="images_slider active">
        <img src="<?= $images[1]['url'] ?>" alt="<?= $images[1]['alt'] ?>" class="images_slider">
        <img src="<?= $images[2]['url'] ?>" alt="<?= $images[2]['alt'] ?>" class="images_slider">

        <div class="suivant">
        <i class="fa-solid fa-circle-right"></i>
        </div>

        <div class="precedent">
        <i class="fa-solid fa-circle-left"></i>
        </div>
    </div>

    <div id="block_absolute_image">
        <h1>Dayly Fresh est une association de producteur locaux</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam faucibus ante et.</p>
        <button>A propos</button>
    </div>
</section>
<?php

$content = ob_get_clean();
$Javascript = 'sliders.js';


require('Views/template/base.php');

?>
