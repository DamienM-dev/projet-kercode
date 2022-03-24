<?php

$title = "A propos";

ob_start();

?>
<section id="block_image_apropos">

    <figure>
        <img>
    </figure>
    <h1>Qui somme nous ?</h1>
    <p>Nous sommes une coopérative locale.</p>
    <p>Notre model est basé sur l'agriculture biologique et le bien être animal</p>
    <p>Nous rémunérons nos agricultureurs aux prix juste</p>

    

</section>

<section id="block_notre_histoire">
      <h2>Notre histoire</h2>
      <p>Depuis sa création, nous cherchons à préserver notre environnement.</p>
      <p> Nous avons décidé de monter une coopérative qui paiera l'agriculture aux prix juste, tout en vendant les produits à la meilleur qualité possible</p>
      <p> Nous cultivons et vendons que des fruits et légume de saisons et nos animaux sont élévés en libertés</p>


      
</section>

<section id="block_notre_équipe">

    <div class="block_agriculteur">
        <img>
        <p></p>
    </div>
    <div class="block_agriculteur">
        <img>
        <p></p>
    </div>
    <div class="block_agriculteur">
        <img>
        <p></p>
    </div>
</section>



<?php
$content = ob_get_clean();
require('Views/template/base.php');

?>
