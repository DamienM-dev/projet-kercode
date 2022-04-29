<?php

$title = "Création administrateur";

ob_start();

?>
<section id="container_connexion_administrateur">
    <h1>Connexion administrateur</h1>
        <form id="form_connexion_administrateur" action="indexAdmin.php?action=connexionAdmin" method="post">


            <div>
                <label for="mail"> email:</label>
                <input type="email" name="mail" id="mail" placeholder="Exemple : Jacques@mail.com" required>
            </div>
            <div>
                <label for="mdp"> Mot de passe: </label>
                <input type="password" name="mdp" id="mdp" placeholder="Exemple : €19Bernadette33" required>
            </div>

            <button type="submit">Soumettre</button>
        </form>
</section>

<?php

$content = ob_get_clean();

require('app/Views/template/base.php');
?>