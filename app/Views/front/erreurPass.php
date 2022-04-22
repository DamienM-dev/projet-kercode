<?php
$title = "identifiant incorrect";

ob_start();

?>
<section id="container_confirmation">
    <h2>Vos identifiants sont incorrects !</h2>
</section>
<?php

$content = ob_get_clean();

?>

<?php

require('app/Views/template/base.php');
?>