<?php

namespace Projet\Controllers;


class AdminController
{

    public function createAdmin($mail, $mdp)
    {

        $adminManager = new \Projet\Models\Admin\AdminModel();
        $user = $adminManager->creatAdmin($mail, $mdp);

        require 'app/Views/admin/createAdmin.php';
    }

    public function connexionAdmin($mail, $mdp)
    {
        $adminManager = new \Projet\Models\Admin\AdminModel();
        $connexionAdmin = $adminManager->recupInfo($mail, $mdp);

        $result = $connexionAdmin->fetch();

        $isPasswordCorrect = password_verify($mdp, $result['mdp']);

        $_SESSION['mail'] = $result['mail'];
        $_SESSION['mdp'] = $result['mdp'];
        $_SESSION['id'] = $result['id'];

        
        if ($isPasswordCorrect == false) {

            require 'app/Views/admin/AdminDashboard.php';
        } 
    }
    public function listerProduit()
    {
        $adminManager = new \Projet\Models\front\ProduitModel();
        $product = $adminManager->listerProduitDashboard();
        
        require 'app/Views/front/AdminDashboard.php';
    }
}
