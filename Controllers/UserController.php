<?php
namespace Projet\Controllers;

class UserController {
    function connexionUser():void {
        require 'Views/formulaireUser.php';
    }

    function createUser($data):void {

        $userPostMail = new \Projet\Models\UserModel();

        $user = $userPostMail->createUser($data);
        require 'views/front/confirmeUser.php';
    }
}