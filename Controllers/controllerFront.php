<?php
namespace Projet\Controllers;

class controllerFront {
    
    function home():void {
    
        $slider = new \Projet\Models\accueilModel();
      $slider->imageSlider();
        require('Views/front/accueilView.php');
    }

}