<?php

namespace Projet\Controllers;

class AdminController
{

    function createAdmin($mail, $mdp)
    {

        $userManager = new \Projet\Models\AdminModel();
        $user = $userManager->creatAdmin($mail, $mdp);

        require 'app/Views/admin/createAdmin.php';
    }
}
