<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';

try {


    $backController = new \Projet\Controllers\AdminController();

        //création admin

    if (isset($_GET['action'])) {

        if ($_GET['action'] == 'creatAdmin') {

                $lastname    = htmlspecialchars($_POST['lastname']);
                $firstname   = htmlspecialchars($_POST['firstname']);
                $mail        = htmlspecialchars($_POST['mail']);
                $mdp         =                  $_POST['mdp'];
    
                $mdp         = password_hash($mdp, PASSWORD_DEFAULT);
    
                $backController->createAdmin($lastname, $firstname,$mail, $mdp);
           
        }
    
        //connexion admin
        
        elseif ($_GET['action'] == 'connexionAdmin') {
            $mail = htmlspecialchars($_POST['mail']);
            $mdp = $_POST['mdp'];

            if (!empty($mail) && !empty($mdp)) {
                $backController->connexionAdmin($mail, $mdp);
            } else {
                throw new Exception('Veuillez remplir les champs du formulaire');
            }

            //lister produit dans dashboard

        } elseif ($_GET['action'] == 'listerProduit') {
            $id = $_GET['id'];
            $backController->listerProduit();

        //vue du produit dans dashboard

        } elseif ($_GET['page'] == 'ViewProductAdmin') {
            $id = $_GET['id'];
            $backController->ViewProductAdmin();



        } elseif ($_GET['action'] == 'ajouterProduit') {

            $backController->ajouterProduit();
        }
    }
} catch (Exception $e) {
    require 'app/Views/front/errorView.php';
}
