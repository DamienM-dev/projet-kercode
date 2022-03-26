<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';


try {

    $backController = new \Projet\Controllers\AdminController();

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'creatAdmin') {

            $mail = htmlspecialchars($_POST['mail']);
            $mdp =                   $_POST['mdp'];

            $mdp = password_hash($mdp, PASSWORD_DEFAULT);

            $backController->createAdmin($mail, $mdp);
        }
    }
} catch (Exception $e) {
    require 'app/Views/front/errorView.php';
}
