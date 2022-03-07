<?php
$title = "Envoi message";

ob_start();

?>
<section id="confirmation">
<h2>Message envoyé !</h2>
</section>
<?php

$content = ob_get_clean();

?>



<?php

require('base.php');
?>