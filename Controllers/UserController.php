<?php

namespace Projet\Controllers;

require_once('./Models/admin/AdminModel.php');

class UserController {

    function displayPageUser() {
    
        require 'Views/front/formulaireUser.php';
    }

    function createUser($data) {
    
        $userCreation = new \Projet\Models\UserModel();
    
        $user = $userCreation->creatUser($data);
        require 'Views/front/formulaireUser.php';


    }


    function connexionUser($mail, $mdp) {

        $userManager = new \Projet\Models\AdminModel();
        $userConnexion = $userManager->recupInfo($mail);

        var_dump($userConnexion);
        die;
        $result = $userConnexion->fetch();

        $isPasswordCorrect = password_verify($mdp, $result['mdp']);

        $_SESSION['mail'] = $result['mail']; 
        $_SESSION['mdp'] = $result['mdp'];
        $_SESSION['id'] = $result['id'];


        if ($isPasswordCorrect) {

            require 'Views/front/userDashboard.php';
        } 



    }

}