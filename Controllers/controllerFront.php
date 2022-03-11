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
  
  function sliderOn(){
    
    $slider = new \Projet\Models\accueilModel();
    $images = $slider->imageSlider();
    
    require('Views/front/accueilView.php');
  }
//=================gestion des mails contact===================

 function contactPost($civility, $lastname, $firstname, $phone, $mail,  $raison, $content)
      { 
          $postMail = new \Projet\Models\ContactModel();
  
  
          if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
              $Mail = $postMail->postMail($civility, $lastname, $firstname, $phone, $mail,  $raison, $content);
              require 'Views/Front/confirmeContact.php';
          } else {
              header('Location: Views/front/errorView.php');
          }
      }
    
}