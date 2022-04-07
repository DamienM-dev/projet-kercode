<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';


try {
    $userController = new \Projet\Controllers\UserController();

    if (isset($_GET['action'])) {

        //========CREATION de l'utilisateur========

        if ($_GET['action'] == 'creatUser') {

            try {

                $civility   = htmlspecialchars($_POST['civility']);
                $lastname   = htmlspecialchars($_POST['lastname']);
                $firstname  = htmlspecialchars($_POST['firstname']);
                $address    = htmlspecialchars($_POST['address']);
                $codePostal = htmlspecialchars($_POST['codePostal']);
                $ville      = htmlspecialchars($_POST['ville']);
                $mail       = htmlspecialchars($_POST['mail']);
                $phone      = htmlspecialchars($_POST['phone']);
                $mdp        =                  $_POST['mdp'];
                $rgpd       =htmlspecialchars($_POST['rgpd']);
    
                $mdp        = password_hash($mdp, PASSWORD_DEFAULT);
    
                $data = [
    
                    'civility'      => $civility,
                    'lastname'      => $lastname,
                    'firstname'     => $firstname,
                    'address'       => $address,
                    'codePostal'    => $codePostal,
                    'ville'         => $ville,
                    'mail'          => $mail,
                    'phone'         => $phone,
                    'mdp'           => $mdp,
                    'rgpd'          => $rgpd
                ];
                
    
    
                $userController->createUser($data);
            } catch (Exception $e){
                die('Erreur : ' .$e->getMessage());
            }

            
        }



        //========CONNEXION de l'utilisateur========

        if ($_GET['action'] == 'connexionUser') {
            $mail = htmlspecialchars($_POST['mail']);
            $mdp  = $_POST['mdp'];


            if (!empty($mail) && !empty($mdp)) {
                $backController->connexionUser($mail, $mdp);
            } else {
                throw new Exception('Veuillez renseigner vos identifiants');
            }
        }
    }
} catch (Exception $e) {
    require 'app/Views/front/errorView.php';
}
