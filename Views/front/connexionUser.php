<?php

$title = "Connexion utilisateur";

ob_start();

?>
<section id="container_connexion_client">
    <h1>Entrer vos information</h1>
        <form action="indexUser.php?action=connexionUser" method="post"> 

            
                <label for="mail" > email:</label>
                <input type="mail" name ="mail" id="mail" placeholder="Exemple : Jacques@mail.com"  checked required>
            </p>
            <p>
                <label for="mdp" > Mot de passe: </label>
                <input type="password" name ="mdp" id="mdp" placeholder="Exemple : €19Bernadette33"  required>
            </p>
            
            <button type="submit">Connexion</button>
        </form>
</section>

    <?php

$content = ob_get_clean();

require('Views/template/base.php');
?>





    