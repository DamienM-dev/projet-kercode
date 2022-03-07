<?php
    $title = "Erreur 404";

    ob_start();
?>

<!-- contenu a remplir -->

<?php
    $content = ob_get_clean();

    require('template/base.php');
?>