<?php
namespace Projet\Controllers;

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

        $userManager = new \Projet\Models\UserModel();
        $userConnexion = $userManager->recupMdp($mail, $mdp);

        $result = $userConnexion->fetch();

        $isPasswordCorrect = password_verify($mdp, $result['mdp']);

        $_SESSION['mail'] = $result['mail'];
        $_SESSION['mdp'] = $result['mdp'];
        $_SESSION['id'] = $result['id'];
        


        if ($isPasswordCorrect) {

            require 'Views/front/Userdashboard.php';
        } 
        
        else {
            echo 'Vos identifiants ne sont pas corrects !';
        }

    }

}