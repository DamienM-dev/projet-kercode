<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';

try {
    $backController = new \Projet\Controllers\UserController();

    if(isset($_GET['action'])) {

        //========CREATION de l'utilisateur========
        
        if ($_GET['action'] == 'creatUser') {

            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $address = $_POST['address'];
            $CP = $_POST['CP'];
            $mail = $_POST['mail'];
            $phone = $_POST['phone'];
            $mdp = $_POST['mdp'];

            $mdp = password_hash($mdp, PASSWORD_DEFAULT);


            $data = [
                'lastname'  => $lastname,
                'firstname' => $firstname,
                'address'   => $address,
                'CP'        => $CP,
                'mail'      => $mail,
                'phone'     => $phone,
                'mdp'       => $mdp
            ];

            $backController->createUser($data);
        }

        //========CONNEXION de l'utilisateur========

    //     if ($_GET['action'] == 'connexionUser') {
    //        $mail = htmlspecialchars($_POST['mail']);
    //        $mdp = $_POST['mdp'];
    //     } if (!empty($mail) && !empty($mdp)) {
    //         $backController->connexionUser($mail, $mdp);
    //     } else {
    //         throw new Exception('Veuillez renseigner vos identifiants');
    //     }


    // } else {
    //     $backController->connexionUser($mail, $mdp);
    }
} catch (Exception $e) {
    require 'Views/front/errorView.php';
}