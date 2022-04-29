<?php

$title = "A propos";

ob_start();

?>
<section id="block_image_apropos">

    <div id="block_inside_image_apropos">

        <h1>Qui somme nous ?</h1>
        <p>Nous sommes une coopérative locale.</p>
        <p>Notre model est basé sur l'agriculture biologique et le bien être animal</p>
        <p>Nous rémunérons nos agricultureurs aux prix juste</p>

    </div>



</section>

<section id="block_notre_histoire">
    <h2>Notre histoire</h2>
    <p>Depuis sa création, nous cherchons à préserver notre environnement.</p>
    <p> Nous avons décidé de monter une coopérative qui paiera l'agriculture aux prix juste, tout en vendant les produits à la meilleur qualité possible</p>
    <p> Nous cultivons et vendons que des fruits et légume de saisons et nos animaux sont élévés en libertés</p>



</section>

<section id="block_notre_equipe">

    <div class="block_agriculteur">
        <div class="agriculteur_information">
            <img src="app/Public/design/images/farmer.jpg" alt="John, le laitier" class="photo_agriculteur">
            <h3>John Doe</h3>
            <p>Notre éleveur laitier ainsi que fromager.</p>
        </div>
        <div class="agriculteur_reseau">
        <a href="#" title="facebook"><i class="fa-brands fa-facebook-f logo_footer fa-2xl"></i></a>
        <a href="#" title="linkedin"><i class="fa-brands fa-linkedin-in logo_footer fa-2xl"></i></a>
        <a href="#" title="instagram"><i class="fa-brands fa-instagram-square logo_footer fa-2xl"></i></a>
        </div>
    </div>

    <div class="block_agriculteur">
        <div class="agriculteur_information">
            <img src="app/Public/design/images/farmer2.jpg" alt="John l'éleveur" class="photo_agriculteur">
            <h3>James Doe</h3>
            <p>Notre éleveur. Vous aurez le choix entre du boeuf, poulet ou du veau .</p>
        </div>
        <div class="agriculteur_reseau">
        <a href="#" title="facebook"><i class="fa-brands fa-facebook-f logo_footer fa-2xl"></i></a>
        <a href="#" title="linkedin"><i class="fa-brands fa-linkedin-in logo_footer fa-2xl"></i></a>
        <a href="#" title="instagram"><i class="fa-brands fa-instagram-square logo_footer fa-2xl"></i></a>
        </div>
    </div>

    <div class="block_agriculteur">
        <div class="agriculteur_information">
            <img src="app/Public/design/images/farmer3.jpg" alt="Jane, l'agriculteur" class="photo_agriculteur">
            <h3>Jane Doe</h3>
            <p>Notre agriculteur. Il vend des fruits et légumes de saisons garantis sans pesticides</p>
        </div>
        <div class="agriculteur_reseau">
        <a href="#" title="facebook"><i class="fa-brands fa-facebook-f logo_footer fa-2xl"></i></a>
        <a href="#" title="linkedin"><i class="fa-brands fa-linkedin-in logo_footer fa-2xl"></i></a>
        <a href="#" title="instagram"><i class="fa-brands fa-instagram-square logo_footer fa-2xl"></i></a>
        </div>
    </div>
</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');

?>