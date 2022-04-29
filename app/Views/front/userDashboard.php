<?php

$title = "A propos";

ob_start();

?>
<?php
$content = ob_get_clean();
require('app/Views/template/base.php');

?>
