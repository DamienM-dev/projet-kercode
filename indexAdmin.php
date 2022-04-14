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
            $mdp  = $_POST['mdp'];

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
            
        } elseif ($_GET['action'] == 'ajouterProduitView') {
            $backController->ajouterProduitView();
            
        }

        //ajoute un produit en bdd

        elseif ($_GET['action'] == 'ajouterProduit') {
            
            
            $name          = htmlspecialchars($_POST['name']);
            $description   = htmlspecialchars($_POST['description']);
            $price         = htmlspecialchars($_POST['price']);
            $categories    = htmlspecialchars( $_POST['categories']);
            $alt           = htmlspecialchars( $_POST['alt']);
            $img           = htmlspecialchars($_POST['img']);
            
            
            $backController->ajouterProduit($name, $description, $price, $categories, $alt, $img);
            
            //DELETE produit depuis dashboard

        }elseif ($_GET['action'] == 'deleteProduit') {
            
            $id = $_GET['id'];
            $backController->deleteProduit($id);
            
            //page CONFIRMATION DELETE

        }elseif ($_GET['action'] == 'confirmationDelete') {

            $id = $_GET['id'];
            $backController->confirmationDelete($id);
            
            //retour à la page dashboard

        }elseif ($_GET['action'] == 'retourDashboard') {
            $backController->retourDashboard();
            
            //affiche page modification produit

        }elseif ($_GET['action'] == 'modifierProduitView') {
            $id = $_GET['id'];
            
            $backController->modifierProduitView($id);
        

            //modifier un produit

        }elseif($_GET['action'] == 'modifierProduit') {
            $id = $_GET['id'];

            $name          = htmlspecialchars($_POST['name']);
            $description   = htmlspecialchars($_POST['description']);
            $price         = htmlspecialchars($_POST['price']);
            $categories    = htmlspecialchars($_POST['categories']);
            $alt           = htmlspecialchars($_POST['alt']);
            $img           = htmlspecialchars($_POST['img']);
           

            $backController->modifierProduit($name, $description, $price, $categories, $alt, $img);
        }elseif($_GET['action'] == 'pageCreationAdmin') {
            $backController->pageCreationAdmin();
        }


    } else {
        echo 'ERREUR !';
    }
    
    


} catch (Exception $e) {
    die('Erreur : ' .$e->getMessage());
}
