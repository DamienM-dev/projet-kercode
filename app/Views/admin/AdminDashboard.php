<?php
session_start();

$title = "Panneau administration";

ob_start();

?>

<section id="dashboard">
    <h1>Panneau administration</h1>
    <h2>Bonjour <?= $_SESSION['firstname'] ?></h2>
    <a href="indexAdmin.php?action=compte&id=<?= $_SESSION['id'] ?>">Mon compte</a>

    <div>

    </div>

</section>



<?php
$content = ob_get_clean();
require('app/Views/template/base.php');

?>
