<?php

namespace Projet\Models;



class AccueilModel extends Manager
{

    public function imageSlider()
    {

        $bdd = $this->dbConnect();
        $response = $bdd->query('SELECT url, alt, testimonial, photo  FROM slider');

        return $response->fetchAll();
    }
}
