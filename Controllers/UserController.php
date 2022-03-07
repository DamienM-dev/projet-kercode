<?php
namespace Projet\Controllers;

class UserController {
    function connexionUser() {
        require 'Views/formulaireUser.php';
    }

    function createUser($lastname, $firstname, $address, $CP, $mail, $phone, $mdp) {

        $userPostMail = new \Projet\Models\UserModel();

        $user = $userPostMail->createUser($lastname, $firstname, $address, $CP, $mail, $phone, $mdp);
        require 'views/front/confirmeUser.php';
    }
}