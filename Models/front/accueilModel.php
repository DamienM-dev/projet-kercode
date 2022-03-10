<?php

namespace Projet\Models;

require_once('Models/front/Manager.php');


class AccueilModel extends Manager {
    
    public function imageSlider() {
        
        $bdd = $this->dbConnect();
        $response = $bdd->query('SELECT url, alt FROM slider');

        return $response;

        while($slider_images = $response->fetchAll()) {

           $url_images = $slider_images['url']['alt'];
           
           
        }
    }

}

