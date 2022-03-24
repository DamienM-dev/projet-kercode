<?php

$title = "A propos";

ob_start();

?>



<?php
$content = ob_get_clean();
require('Views/template/base.php');

?>
