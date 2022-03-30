<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';


try {

    $backController = new \Projet\Controllers\AdminController();

    if (isset($_GET['action'])) {

        if ($_GET['action'] == 'creatAdmin') {

            $mail   = htmlspecialchars($_POST['mail']);
            $mdp    =                  $_POST['mdp'];

            $mdp    = password_hash($mdp, PASSWORD_DEFAULT);

            $backController->createAdmin($mail, $mdp);
        } elseif ($_GET['action'] == 'connexionAdmin') {
            $mail = htmlspecialchars($_POST['mail']);
            $mdp = $_POST['mdp'];

            if (!empty($mail) && !empty($mdp)) {
                $backController->connexionAdmin($mail, $mdp);
            } else {
                throw new Exception('Veuillez remplir les champs du formulaire');
            }
        } //elseif ($_GET['action'] == 'listerProduit') {
        //     $backController->listerProduit();
        // }

        // a voir si inutile
    }
} catch (Exception $e) {
    require 'app/Views/front/errorView.php';
}
