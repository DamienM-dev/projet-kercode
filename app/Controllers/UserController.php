<?php

namespace Projet\Controllers;



class UserController
{

    function displayPageUser()
    {

        require 'app/Views/front/formulaireUser.php';
    }

    function createUser($data)
    {

        $userCreation = new \Projet\Models\UserModel();

        $user = $userCreation->creatUser($data);
        require 'app/Views/front/formulaireUser.php';
    }


    function connexionUser($mail, $mdp)
    {

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

            require 'app/Views/front/userDashboard.php';
        }
    }
}
