<?php


session_start();

try {
    $backController = new \Projet\Controller\UserController();

    if(isset($_GET['action'])) {
        if ($_GET['action'] == 'createUser') {

            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $adress = $_POST['adress'];
            $CP = $_POST['CP'];
            $mail = $_POST['mail'];
            $phone = $_POST['phone'];
            $mdp = $_POST['mdp'];

            $mdp = password_hash($mdp, PASSWORD_DEFAULT);

            $backController->createUser($lastname, $firstname, $address, $CP, $mail, $phone, $mdp);
        }
    } else {
        $backController->userConnected();
    }
} catch (Exception $e) {
    require 'app/Views/front/errorView.php';
}