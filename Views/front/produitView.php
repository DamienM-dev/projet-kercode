<?php

$title = "Nos produits";

ob_start();

?>





<?php
$content = ob_get_clean();
require('Views/template/base.php');

?>
