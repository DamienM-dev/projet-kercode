<?php

namespace Projet\Models\front;



class AccueilModel extends \Projet\Models\Manager
{

    public function imageSlider()
    {

        $bdd = $this->dbConnect();
        $response = $bdd->query('SELECT url, alt, testimonial, photo  FROM slider');

        return $response->fetchAll();
    }
}
