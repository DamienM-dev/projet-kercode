<?php

$title = "Création administrateur";

ob_start();

?>
<section id="container_creation_administrateur">
    <h1>Création administrateur</h1>
        <form action="indexAdmin.php?action=creatAdmin" method="post">


            <p>
                <label for="lastname"> nom:</label>
                <input type="text" name="lastname" id="lastname" placeholder="Exemple : Chirac" checked required>
            </p>
            <p>
                <label for="firstname"> prenom: </label>
                <input type="text" name="firstname" id="firstname" placeholder="Exemple : Jacques" required>
            </p>

            <p>
                <label for="mail"> email:</label>
                <input type="mail" name="mail" id="mail" placeholder="Exemple : Jacques@mail.com" checked required>
            </p>
            <p>
                <label for="mdp"> Mot de passe: </label>
                <input type="password" name="mdp" id="mdp" placeholder="Exemple : €19Bernadette33" required>
            </p>

            <button type="submit">Soumettre</button>
        </form>
</section>

<?php

$content = ob_get_clean();

require('app/Views/template/base.php');
?>