<?php

$title = 'Contact';
ob_start();

?>

<section id="container_contact">

<h1>Fomulaire de contact</h1>
    <form id="contact" action = "#" method="post"> 

        <p>
            <label for="civility" > Civilité <span>*</span></label>
            <input type="radio" name ="civility" id="civility" value="Mr" checked required>Mr
            <input type="radio" name ="civility" id="civility" value="Mme" required>Mme
        </p>

        <p>
            <label for="lastname" > Nom de familles<span>*</span> :</label>
            <input type="text" name ="lastname" id="lastname" placeholder="Exemple : Chirac" required>
        </p>
        <p>
            <label for="firstname" > prénom <span>*</span> :</label>
            <input type="text" name ="firstname" id="firstname" placeholder="Exemple : Jacques" required>
        </p>
       
        <p>
            <p>
                <label for="phone" > Téléphone :</label>
                <input type="tel" name ="phone" id="phone" placeholder="Exemple : 0123456789" maxlength="10">
            </p>
            <label for="mail" > email :</label>
            <input type="mail" name ="mail" id="mail" placeholder="Exemple : Jacques@mail.com" required>
        </p>
        <p>
            <label for="raison">Pourquoi souhaiez-vous nous contacter ?</label>
            <select  name ="raison" id="raison">
                <option value="reclamation">Réclamation</option>
                <option value="candidature">candidature</option>
                <option value="commerciale">offre commerciale</option>
            </select>
        </p>
        <textarea name="contact" id="contact" cols="30" rows="10" required></textarea>
        <p><span>*</span> champs obligatoire</p>
        <button type="submit">Soumettre</button>
    </form>
</section>
<?php
    $content = ob_get_clean();
    require('Views/template/base.php');

?>
