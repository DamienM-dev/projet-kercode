<?php

namespace Projet\Controllers;


class AdminController
{
    //creer admnistrateur, va peut être dégager
    public function createAdmin($mail, $mdp)
    {

        $adminManager = new \Projet\Models\Admin\AdminModel();
        $user = $adminManager->creatAdmin($mail, $mdp);

        require 'app/Views/admin/createAdmin.php';
    }
    //connecte l'admin a son dashboard
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
    //affiche les produits présant en bdd dans dashboard
    public function listerProduit()
    {
        $adminManager = new \Projet\Models\front\ProduitModel();
        $product = $adminManager->listerProduitDashboard();

        require 'app/Views/front/AdminDashboard.php';
    }

    //affiche la vu global d'un produit

    public function ViewProductAdmin()
    {
        // $adminManager = new \Projet\Models\front\ProduitModel();
        // $productView = $adminManager->returnProducts();

        require 'app/Views/admin/produitView.php';
    }

    //ajoute un prduit en bdd
    public function ajouterProduit()
    {
        $adminManager = new \Projet\Models\front\ProduitModel();
        $ajouterProduit = $adminManager->ajouterProduitBdd();


        require 'app/Views/admin/ajouterProduitView.php';
    }
}
