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


            //Vu d'un produit sur le Dashbboard

        } elseif ($_GET['action'] == 'voirProduit') {
            $id = $_GET['id'];
           
        
            $backController->ViewProductAdmin($id);
            

        //afficher view du formulaire d'ajout en bdd

        } elseif ($_GET['page'] == 'ajouterProduitView') {
            $backController->ajouterProduitView();

        }
        elseif ($_GET['action'] == 'ajouterProduit') {

            $backController->ajouterProduit();

            //DELETE produit depuis dashboard
        }elseif ($_GET['action'] == 'deleteProduit') {
            $id = $_GET['id'];
            $backController->deleteProduit($id);
        }


    } else {
        echo 'ligne 68';
    }
    


} catch (Exception $e) {
    die('Erreur : ' .$e->getMessage());
}
