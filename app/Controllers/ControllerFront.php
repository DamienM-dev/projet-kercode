<?php

namespace Projet\Controllers;




class ControllerFront
{

  function home()
  {

    // $slider = new \Projet\Models\AccueilModel();
    // $testimonial = $slider->imageSlider();
    require('app/Views/front/accueilView.php');
  }

  function login()
  {

    require('app/Views/front/formulaireUser.php');
  }

  function aProposView()
  {

    require('app/Views/front/aProposView.php');
  }

  function produitView()
  {

    require('app/Views/front/produitView.php');
  }

  function contact()
  {

    require('app/Views/front/contactView.php');
  }

  function donneesPerso()
  {

    require('app/Views/front/donneesPersoView.php');
  }

  function mentionsLegales()
  {

    require('app/Views/front/mentionsLegalesView.php');
  }

  function pageConnexionUser()
  {
    require('app/Views/front/connexionUser.php');
  }

  //=================gestion des mails contact===================

  function contactPost($contactData)
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
