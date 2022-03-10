<?php
namespace Projet\Controllers;

class UserController {

    function displayPageUser():void {
    
        require 'Views/front/formulaireUser.php';
    }

    function createUser($data):void {
    
        $userCreation = new \Projet\Models\UserModel();
    
        $user = $userCreation->creatUser($data);
        require 'Views/front/formulaireUser.php';
    }

    function contact() {

        require 'Views/front/contactView.php';
    }
    // function connexionUser($mail, $mdp) {

    //     $userManager = new \Projet\Models\UserModel();
    //     $userconnexion = $userManager->recupMdp($mail, $mdp);

    //     $result = $userconnexion->fetch();

    //     $isPasswordCorrect = password_verify($mdp, $result['mdp']);

    //     $_SESSION['mail'] = $result['mail']; // transformation des variables recupérées en session
    //     $_SESSION['mdp'] = $result['mdp'];
    //     $_SESSION['id'] = $result['id'];
    //     $_SESSION['firstname'] = $result['firstname'];


    //     if ($isPasswordCorrect) {

    //         require 'Views/front/Userdashboard.php';
    //     } 
        
    //     else {
    //         echo 'Vos identifiants ne sont pas corrects !';
    //     }

    // }

}