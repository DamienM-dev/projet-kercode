<?php

namespace Projet\Controllers;



class ControllerFront
{

  public function home()
  {

    $slider = new \Projet\Models\AccueilModel();
    $testimonial = $slider->imageSlider();
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
    require('app/Views/admin/createAdmin.php');
  }

  //=================gestion des mails contact===================

  public function contactPost($contactData)
  {
    $postMail = new \Projet\Models\ContactModel();


    if (filter_var($contactData['mail'], FILTER_VALIDATE_EMAIL)) {
      $Mail = $postMail->postMail($contactData);
      require 'app/Views/Front/confirmeContact.php';
    } else {
      header('Location: app/Views/front/errorView.php');
    }
  }
}
