<?php
namespace Projet\Controllers;

require_once('./Models/front/AccueilModel.php');


class ControllerFront 
{
  
  function home() {
    
    $slider = new \Projet\Models\AccueilModel();
    $testimonial = $slider->imageSlider();
    require('Views/front/accueilView.php');
  }

  function login() {
   
    require('Views/front/formulaireUser.php');
  }

  function aProposView() {

    require('Views/front/aProposView.php');
  }

  function produitView() {

    require('Views/front/produitView.php');
  }

  function contact() {
   
    require('Views/front/contactView.php');
  }

  function donneesPerso() {

    require('Views/front/donneesPersoView.php');
  }

  function mentionsLegales() {

    require('Views/front/mentionsLegalesView.php');
  }
  
//=================gestion des mails contact===================

 function contactPost($contactData)
      { 
          $postMail = new \Projet\Models\ContactModel();
  
  
          if (filter_var($contactData['mail'], FILTER_VALIDATE_EMAIL)) {
              $Mail = $postMail->postMail($contactData);
              require 'Views/Front/confirmeContact.php';
          } else {
              header('Location: Views/front/errorView.php');
          }
      }
    
}