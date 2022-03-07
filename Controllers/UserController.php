<?php
namespace Projet\Controllers;

class UserController {
    function connexionUser() {
        require 'Views/formulaireUser.php';
    }

    function createUser($data) {

        $userPostMail = new \Projet\Models\UserModel();

        $user = $userPostMail->createUser($data);
        require 'views/front/confirmeUser.php';
    }
}