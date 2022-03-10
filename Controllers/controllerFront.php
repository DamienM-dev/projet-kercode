<?php
namespace Projet\Controllers;

class controllerFront {
  
  function home():void {
    
    require('Views/front/accueilView.php');
  }
  
  function sliderOn(){
    
    $slider = new \Projet\Models\accueilModel();
    $slider->imageSlider();
    
    require('Models/front/accueilModel.php');
  }
    
}