<?php
$title = "formulaire d'inscrption'";

ob_start();

?>
<section id="container_inscription">

<h1>Inscrivez-vous pour acceder à nos produits !</h1>
<form action = "indexUser.php?action=creatUser" method="post"> 

    <div>
        <label for="civility" > Civilité<span>*</span></label>
        <input type="radio" name ="civility" id="civility" value="Mr" checked required>Mr
        <input type="radio" name ="civility" id="civility" value="Mme" required>Mme
    </div>

    <div class="center">
        <p>
            <label for="lastname" > Nom de famille<span>*</span> :</label>
            <input type="text" name ="lastname" id="lastname" placeholder="Exemple : Chirac" required>
        </p>
        <p>
            <label for="firstname" > prénom<span>*</span> :</label>
            <input type="text" name ="firstname" id="firstname" placeholder="Exemple : Jacques" required>
        </p>
    <div class="center">

        <div class="center">
            <p>
                <label for="address" > adresse<span>*</span> :</label>
                <input type="text" name ="address" id="address" placeholder="Exemple : Le Palais de l'Elysée" required>
            </p>
            <p>
                <label for="postal" > Code postal<span>*</span> :</label>
                <input type="number" name ="postal" id="postal"  maxlength="5" placeholder="Exemple : 75000" required >
            </p>
        </div>

        <div class="center">
            <p>
                <label for="ville" > Ville<span>*</span> :</label>
                <input type="text" name ="vile" id="ville" placeholder="Exemple : Paris" required >
            </p>
        </div>

    <div class="center">
        <p>
            <label for="phone" > Téléphone<span>*</span> :</label>
            <input type="tel" name ="phone" id="phone" placeholder="Exemple : 0123456789" maxlength="10" required>
        </p>
        <p>
            <label for="mail" > email<span>*</span> :</label>
            <input type="mail" name ="mail" id="mail" placeholder="Exemple : Jacques@mail.com" required>
        </p>
    </div>

    <div class="center">
        <p>
            <label for="mdp" > Mot de passe<span>*</span>: </label>
            <input type="password" name ="mdp" id="mdp" placeholder="Exemple : €19Bernadette33" required>
        </p>
    </div>

    <div>
        <p>
            <label for="rgpd" > Accepter les conditions général<span>*</span> </label>
            <input type="checkbox" name ="rgpd" id="rgpd"  required>
        </p>
    </div>

    <div>
        <p><span>*</span> champs obligatoire</p>
    </div>
    <button type="submit"><a href="indexUser.php?action=connexionUser">Soumettre</a></button></button>
</form>
</section>
<?php

$content = ob_get_clean();
require('Views/template/base.php');

?>


