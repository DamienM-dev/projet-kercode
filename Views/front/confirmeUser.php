<?php
$title = "Envoi message";

ob_start();

?>
<section id="container_confirmation">
<h2>Message envoyé !</h2>
</section>
<?php

$content = ob_get_clean();

?>



<?php

require('Views/template/base.php');
?>