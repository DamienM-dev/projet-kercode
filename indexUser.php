<?php


session_start();

require_once __DIR__ . '/vendor/autoload.php';

try {
    $backController = new \Projet\Controllers\UserController();

    if(isset($_GET['action'])) {
        if ($_GET['action'] == 'createUser') {

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
    } else {
        $backController->connexionUser();
    }
} catch (Exception $e) {
    require 'Views/front/errorView.php';
}