<?php
$title = "Envoi message";

ob_start();

?>
<section id="container_confirmation">
    <h2>compte créer !</h2>
</section>
<?php

$content = ob_get_clean();

?>



<?php

require('app/Views/template/base.php');
?>