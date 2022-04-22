<?php

namespace Projet\Controllers;



class UserController
{

    

    public function createUser($data)
    {

        $userCreation = new \Projet\Models\front\UserModel();

        $user = $userCreation->creatUser($data);
        require 'app/Views/front/formulaireUser.php';
       
    }


    public function connexionUser($mail, $mdp)
    {

    
        $userManager = new \Projet\Models\front\UserModel();
        $userConnexion = $userManager->recupInfoUser($mail);
        

        $result = $userConnexion->fetch();

        $isPasswordCorrect = password_verify($mdp, $result['mdp']);

        $_SESSION['mail'] = $result['mail'];
        $_SESSION['mdp'] = $result['mdp'];
        $_SESSION['id'] = $result['id'];


        if ($isPasswordCorrect && filter_var($result['mail'], FILTER_VALIDATE_EMAIL)) {

            $userCreation = new \Projet\Models\front\UserModel();

            require 'app/Views/front/userDashboard.php';
        } else {
            require 'app/Views/front/erreurPass.php';
        }
    }
}
