<?php

namespace Projet\Controllers;

use Exception;
class AdminController
{
    //creer admnistrateur
    public function createAdmin($lastname, $firstname,$mail, $mdp)
    {

        $adminManager = new \Projet\Models\Admin\AdminModel();
        $admin = $adminManager->creatAdmin($lastname, $firstname,$mail, $mdp);

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


        if ($isPasswordCorrect) {
            $produitModel = new \Projet\Models\Admin\AdminModel();

            $product = $produitModel->listerProduit();

            require 'app/Views/admin/AdminDashboard.php';
        } 
    }
    

    //affiche la vu global d'un produit dans le dashboard

    public function ViewProductAdmin($id)
    {
        
        $adminManager = new \Projet\Models\front\ProduitModel();
        $produit= $adminManager->returnProduct($id);
        
        require 'app/Views/admin/produitView.php';
    }
    
    //afficher view du formulaire d'ajout en bdd

    public function ajouterProduitView() {
        $produitModel = new \Projet\Models\Admin\AdminModel();
        
        $categories= $produitModel->selectCategory();

        require 'app/Views/admin/ajouterProduitView.php';

    }

    //ajoute un produit en bdd
    public function ajouterProduit($name, $description, $price, $categories, $img)
    {
        $adminManager = new \Projet\Models\front\ProduitModel();
        $ajouterProduit = $adminManager->ajouterProduitBdd($name, $description, $price, $categories, $img);


        require 'app/Views/admin/ajouterProduitView.php';
    }

    public function confirmationDelete()
    {
        require 'app/Views/admin/confirmationDelete.php';
    }

    //DELETE un produit

    public function deleteProduit($id)
    {
        
        
            $adminManager = new \Projet\Models\Admin\AdminModel();
            $deleteProduit = $adminManager->deleteProduit($id);
        
    
            require 'app/Views/admin/AdminDashboard.php';
      
    } 
    
    public function retourDashboard()
    {
        require 'app/Views/admin/AdminDashboard.php';
    }

    public function selectCategory()
    {
        $adminManager = new \Projet\Models\Admin\AdminModel();
        $categories = $adminManager->selectCategory();
        require 'app/Views/admin/ajouterProduitView.php';
    }
}
