<?php


$title = "Panneau administration";

ob_start();

?>

<section id="confirmationDelete">
    <h1>Panneau administration</h1>

    
    
    <div>
        <h2>êtes vous sur de vouloir supprimer ?</h2>
        <button><a href="indexAdmin.php?action=deleteProduit">Supprimer</a></button>
        
    </div>

    

</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');
?>