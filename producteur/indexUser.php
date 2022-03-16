<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';
require_once 'Controllers/UserController.php';
require_once 'Models/front/UserModel.php';
require_once('Models/front/Manager.php');

try {
    $backController = new \Projet\Controllers\UserController();

    if(isset($_GET['action'])) {
        
        //========CREATION de l'utilisateur========

        if ($_GET['action'] == 'creatUser') {

            $lastname   = $_POST['lastname'];
            $firstname  = $_POST['firstname'];
            $address    = $_POST['address'];
            $codePostal = $_POST['codePostal'];
            $mail       = $_POST['mail'];
            $phone      = $_POST['phone'];
            $mdp        = $_POST['mdp'];
            
            $mdp        = password_hash($mdp, PASSWORD_DEFAULT);
            
            $data = [
                'lastname'      => $lastname,
                'firstname'     => $firstname,
                'address'       => $address,
                'codePostal'    => $codePostal,
                'mail'          => $mail,
                'phone'         => $phone,
                'mdp'           => $mdp
            ];


            $backController->createUser($data);
        }
        
            

        //========CONNEXION de l'utilisateur========

        if ($_GET['action'] == 'connexionUser') 
        {
            $mail = htmlspecialchars($_POST['mail']);
            $mdp  = $_POST['mdp'];
        } 
        
        if (!empty($mail) && !empty($mdp)) 
        {
            $backController->connexionUser($mail, $mdp);

        } else 
        {
            throw new Exception('Veuillez renseigner vos identifiants');
        }

    }
} catch (Exception $e) {
    require 'Views/front/errorView.php';
}