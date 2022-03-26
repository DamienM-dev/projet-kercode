<?php

$title = "Nos produits";

ob_start();

?>





<?php
$content = ob_get_clean();
require('app/Views/template/base.php');

?>
