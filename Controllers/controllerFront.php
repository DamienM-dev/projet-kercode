<?php
namespace Projet\Controllers;

require_once('./Models/front/AccueilModel.php');


class ControllerFront {
  
  function home():void {
    
    $slider = new \Projet\Models\AccueilModel();
    $images = $slider->imageSlider();
    require('Views/front/accueilView.php');
  }

  function login():void {
   
    require('Views/front/formulaireUser.php');
  }

  

  function contact():void {
   
    require('Views/front/contactView.php');
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