<?php

$title = 'Contact';
ob_start();

?>

<section id="container_contact">

    <h1>Fomulaire de contact</h1>
    <form id="contact" action="index.php?action=contactPost" method="post">

        <div>
            <label for="civility"> Civilité <span>*</span></label>
            <input type="radio" name="civility" id="civility" value="Mr" checked required>Mr
            <input type="radio" name="civility" id="civility" value="Mme" required>Mme
        </div>

        <div class="center_formulaire">
            <label for="lastname"> Nom de familles<span>*</span> :</label>
            <input type="text" name="lastname" id="lastname" placeholder="Exemple : Chirac" required>
        </div>

        <div class="center_formulaire">
            <label for="firstname"> prénom <span>*</span> :</label>
            <input type="text" name="firstname" id="firstname" placeholder="Exemple : Jacques" required>
        </div>

        <div class="center_formulaire">
            <div>
                <label for="phone"> Téléphone :</label>
                <input type="tel" name="phone" id="phone" placeholder="Exemple : 0123456789" maxlength="10">
            </div>
            <label for="mail"> email :</label>
            <input type="mail" name="mail" id="mail" placeholder="Exemple : Jacques@mail.com" required>
        </div>

        <div class="center_formulaire">
            <label for="raison">Pourquoi souhaiez-vous nous contacter ?</label>
            <select name="raison" id="raison">
                <option value="reclamation">Réclamation</option>
                <option value="candidature">candidature</option>
                <option value="commerciale">offre commerciale</option>
            </select>
        </div>

        <textarea name="content" id="content" cols="30" rows="10" required></textarea>
        <p><span>*</span> champs obligatoire</p>
        <button type="submit">Soumettre</button>
    </form>

    <div id="map">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12785.18502806991!2d-2.7857574092587436!3d47.65034580902798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101c1ee7bc3d91%3A0xa622fa4c9bf9c44c!2sLyc%C3%A9e%20G%C3%A9n%C3%A9ral%20et%20technologique%20Alain%20Rene%20Lesage!5e0!3m2!1sfr!2sfr!4v1647680060326!5m2!1sfr!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

</section>
<?php
$content = ob_get_clean();
require('app/Views/template/base.php');

?>