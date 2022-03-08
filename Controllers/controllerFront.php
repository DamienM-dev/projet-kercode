<?php
namespace Projet\Controllers;
require('Models/front/accueilModel.php');

class controllerFront {
    
    function home():void {
    
      require('Views/front/accueilView.php');
    }

    function sliderOn(){

      $slider = new \Projet\Models\accueilModel();
      $slider->imageSlider();
    }
    
}