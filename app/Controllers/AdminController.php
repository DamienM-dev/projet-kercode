<?php

namespace Projet\Controllers;

class AdminController
{
    //creer admnistrateur
    public function createAdmin($lastname, $firstname,$mail, $mdp)
    {

        $adminManager = new \Projet\Models\Admin\AdminModel();
        $admin = $adminManager->creatAdmin($lastname, $firstname,$mail, $mdp);

        require 'app/Views/admin/createAdmin.php';
    }

    public function pageCreationAdmin(){
        require './app/Views/admin/createAdmin.php';
    }
    
    //connecte l'admin a son dashboard
    public function connexionAdmin($mail, $mdp)
    {
        $adminManager = new \Projet\Models\Admin\AdminModel();
        $connexionAdmin = $adminManager->recupInfo($mail);

        $result = $connexionAdmin->fetch();

        if(!empty($result)){

        if ($result['mdp'] === $mdp) {
            echo "les informations ne sont pas correct";
        }

        $isPasswordCorrect = password_verify($mdp, $result['mdp']);

        $_SESSION['mail'] = $result['mail'];
        $_SESSION['mdp'] = $result['mdp'];
        $_SESSION['id'] = $result['id'];
        $_SESSION['firstname'] = $result['firstname'];
        
        
        if ($isPasswordCorrect && filter_var($result['mail'], FILTER_VALIDATE_EMAIL)) {
            $produitModel = new \Projet\Models\Admin\AdminModel();
            
            $product        = $produitModel->listerProduit();
            $nombreClient   = $adminManager->nombreClient();
            $emailCount     = $adminManager->countEmail();
          
            

            
            $adminManager = new \Projet\Models\front\ProduitModel();
            $produitsCount = $adminManager->countProduct();
            require 'app/Views/admin/AdminDashboard.php';


        } else {
            require 'app/Views/front/erreurPass.php';
            }
        } else {
            require 'app/Views/front/incorrecteView.php';;
        }
    }

    public function deconnexionAdmin() 
    {

            session_unset();
            session_destroy();

            $controllerFront = new \Projet\Controllers\ControllerFront();
            $controllerFront->home();
            exit();

    }
    

    //affiche la vu global d'un produit dans le dashboard

    public function ViewProductAdmin($id)
    {
        
        $adminManager = new \Projet\Models\front\ProduitModel();
        $produit= $adminManager->returnProduct($id);
        
        
        require 'app/Views/admin/produitAdminView.php';
    }
    
    //afficher view du formulaire d'ajout en bdd

    public function ajouterProduitView() {
        $produitModel = new \Projet\Models\Admin\AdminModel();
        
        $categories= $produitModel->selectCategory();

        require 'app/Views/admin/ajouterProduitView.php';

    }

    //ajoute un produit en bdd
    public function ajouterProduit($name, $description, $price, $categories,  $alt, $img)
    {
        $adminManager = new \Projet\Models\front\ProduitModel();
        $ajouterProduit = $adminManager->ajouterProduitBdd($name, $description, $price, $categories,  $alt, $img);
    
        $produitModel = new \Projet\Models\Admin\AdminModel();
        $categories= $produitModel->selectCategory();


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
            $product = $adminManager->listerProduit();
            $nombreClient = $adminManager->nombreClient();
            $emailCount = $adminManager->countEmail();

            $adminManager = new \Projet\Models\front\ProduitModel();
            $produitsCount = $adminManager->countProduct();
        
    
            require 'app/Views/admin/AdminDashboard.php';
      
    } 

    //affiche page UPDATE

    public function modifierProduitView($id) {

        $adminManager = new \Projet\Models\front\ProduitModel();
        $produit= $adminManager->returnProduct($id);

        $adminManager = new \Projet\Models\Admin\AdminModel();
        $categories = $adminManager->selectCategory();
        
        

        require 'app/Views/admin/modifierProduitView.php';
    }

    //UPDATE produit

    public function modifierProduit($id, $name, $description, $price, $categories, $alt, $img) {
        
        $adminManager = new \Projet\Models\front\ProduitModel();
        $produit = $adminManager->modifierProduit($id, $name, $description, $price, $categories, $alt, $img);



        $produit= $adminManager->returnProduct($id);
        require 'app/Views/admin/ProduitAdminView.php';
        
        
    }
    
    // retourne vers le dashboard admin

    public function retourDashboard()
    
    {
        $adminManager = new \Projet\Models\Admin\AdminModel();
        $product = $adminManager->listerProduit();
        $nombreClient = $adminManager->nombreClient();
        $emailCount = $adminManager->countEmail();

        $adminManager = new \Projet\Models\front\ProduitModel();
         $produitsCount = $adminManager->countProduct();
        require 'app/Views/admin/AdminDashboard.php';
    }

     // Selectionne categorie d'un produit

    public function selectCategory()
    {
        $adminManager = new \Projet\Models\Admin\AdminModel();
        $categories = $adminManager->selectCategory();
        require 'app/Views/admin/ajouterProduitView.php';
    }

     // compte nombre client

    public function nombreClient()
    {
        $adminManager = new \Projet\Models\Admin\AdminModel();
        $nombreClient = $adminManager->nombreClient();

        require 'app/Views/admin/AdminDashboard.php';
    }

    // compte nombre de produit

    public function countProduct()
    {
        $adminManager = new \Projet\Models\front\ProduitModel();
        $produitsCount = $adminManager->countProduct();
    }

    // compte nombres d'email

    public function countEmail()
    {
        $adminManager = new \Projet\Models\Admin\AdminModel();
        $emailCount = $adminManager->countEmail();
    }
}
