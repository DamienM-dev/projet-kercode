<?php

namespace Projet\Controllers;



class ControllerFront
{

  public function home()
  {

    $slider = new \Projet\Models\front\AccueilModel();
    $sliderImage = $slider->imageSlider();
    require('app/Views/front/accueilView.php');
  }

  public function login()
  {

    require('app/Views/front/formulaireUser.php');
  }

  public function aProposView()
  {

    require('app/Views/front/aProposView.php');
  }

  public function produitView()
  {
    $produitModel = new \Projet\Models\front\ProduitModel();
    $produits = $produitModel->returnProducts();
    $produitsCount = $produitModel->countProduct();

    require('app/Views/front/produitView.php');
  }

  //compte le nombre de produit sur page produit

  public function countProduct() 
  {

    $produitModel = new \Projet\Models\front\ProduitModel();
    $nbrPage = $produitModel->countProduct();

    require('app/Views/admin/adminDashboard.php');

  }
 

  public function contact()
  {

    require('app/Views/front/contactView.php');
  }


  public function donneesPerso()
  {

    require('app/Views/front/donneesPersoView.php');
  }

  public function mentionsLegales()
  {

    require('app/Views/front/mentionsLegalesView.php');
  }

  public function pageConnexionUser()
  {
    require('app/Views/front/connexionUser.php');
  }

  public function pageConnexionAdmin()
  {
    require('app/Views/admin/connexionAdmin.php');
  }

  public function pagePanier()
  {
    require('app/Views/front/panierView.php');
  }

  //=================gestion des mails contact===================

  public function contactPost($contactData)
  {
    $postMail = new \Projet\Models\front\ContactModel();

    if (filter_var($contactData['mail'], FILTER_VALIDATE_EMAIL)) {
      $Mail = $postMail->postMail($contactData);
      require 'app/Views/Front/confirmeUser.php';
      
    } else {
      header('Location: app/Views/front/errorView.php');
    }
  }
}
