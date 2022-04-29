<?php

$title = "Connexion utilisateur";

ob_start();

?>
<section id="container_connexion_client">
    <h1>Entrer vos informations</h1>
    <form id="form_connexion_client" action="indexUser.php?action=connexionUser" method="post">

        <div>
            <label for="mail"> email:</label>
            <input type="email" name="mail" id="mail" placeholder="Exemple : Jacques@mail.com" required>
        </div>
        <div>
            <label for="mdp"> Mot de passe: </label>
            <input type="password" name="mdp" id="mdp" placeholder="Exemple : €19Bernadette33" required>
        </div>

        <button type="submit">Connexion</button>
    </form>
</section>

<?php

$content = ob_get_clean();

require('app/Views/template/base.php');
?>