<?php
$title = "formulaire d'inscrption'";

ob_start();

?>
<section id="container_inscription">

    <h1>Inscrivez-vous pour acceder à nos produits !</h1>
    <form class="form_create_user" action="indexUser.php?action=creatUser" method="post">


        <div>
            <label for="civility"> Civilité<span>*</span></label>
            <input type="radio" name="civility" id="civility" value="Mr" checked required>Mr
            <input type="radio" name="civility" id="civility" value="Mme" required>Mme
        </div>

        <div class="center_formulaire formulaire_grand">
            <div>
                <label for="lastname"> Nom de famille<span>*</span> :</label>
                <input type="text" name="lastname" id="lastname" class="invalid" placeholder="Exemple : Chirac" required>
            </div>
            <div>
                <label for="firstname"> prénom<span>*</span> :</label>
                <input type="text" name="firstname" id="firstname" class="invalid" placeholder="Exemple : Jacques" required>
            </div>
        </div>

        <div class="center_formulaire formulaire_grand">
            <div>
                <label for="address"> adresse<span>*</span> :</label>
                <input type="text" name="address" id="address" class="invalid" placeholder="Exemple : Le Palais de l'Elysée" required>
            </div>

            <div>
                <label for="codePostal"> Code postal<span>*</span> :</label>
                <input type="number" name="codePostal" id="codePostal" class="invalid" placeholder="Exemple : 75000" required>
            </div>
        </div>

                <div class="center_formulaire formulaire_grand">

                    <div>
                        <label for="ville"> Ville<span>*</span> :</label>
                        <input type="text" name="ville" id="ville" class="invalid" placeholder="Exemple : Paris" required>
                    </div>

                    <div>
                        <label for="phone"> Téléphone<span>*</span> :</label>
                        <input type="tel" name="phone" id="phone" class="invalid" placeholder="Exemple : 0123456789" maxlength="10" required>
                    </div>
                </div>

                <div class="center_formulaire formulaire_grand">
                    <div>
                        <label for="mail"> email<span>*</span> :</label>
                        <input type="email" name="mail" id="mail" class="invalid" placeholder="Exemple : Jacques@mail.com" required>
                    </div>

                    <div>
                        <label for="mdp"> Mot de passe<span>*</span>: </label>
                        <input type="password" name="mdp" id="mdp" class="invalid" placeholder="Exemple : €19Bernadette33" minlength="5" required>
                    </div>
                </div>

                <div>
                    <div id="condition_generale">
                        <label for="rgpd"> Accepter les conditions générales<span>*</span> </label>
                        <input type="checkbox" name="rgpd" id="rgpd" required>
                </div>
                </div>

                <div>
                    <p><span>*</span> champs obligatoire</p>
                </div>
                <button type="submit" class="button">Soumettre</button>
    </form>
    <script src="app/Public/design/js/form.js"></script>
</section>
<?php

$content = ob_get_clean();
require('app/Views/template/base.php');

?>