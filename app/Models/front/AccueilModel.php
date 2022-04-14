<?php

namespace Projet\Models\front;



class AccueilModel extends \Projet\Models\Manager
{

    public function imageSlider()
    {

        $bdd = $this->dbConnect();
        $response = $bdd->query("SELECT url, slider.alt, photo, testimonial, testimonials.alt  as a
                                FROM slider
                                INNER JOIN testimonials
                                ON slider.id = testimonials.slider_id");

        return $response->fetchAll();
        
    }
}
