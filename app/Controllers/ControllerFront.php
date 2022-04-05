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

    require('app/Views/front/produitView.php');
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

  //=================gestion des mails contact===================

  public function contactPost($contactData)
  {
    $postMail = new \Projet\Models\front\ContactModel();


    if (filter_var($contactData['mail'], FILTER_VALIDATE_EMAIL)) {
      $Mail = $postMail->postMail($contactData);
      require 'app/Views/Front/confirmeContact.php';
    } else {
      header('Location: app/Views/front/errorView.php');
    }
  }
}
