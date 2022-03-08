<?php

namespace Projet\Models;

require_once('Models/front/Manager.php');


class AccueilModel extends Manager {

    public function imageSlider() {

        $bdd = $this->dbConnect();
        $response = $bdd->query('SELECT url FROM slider');
        return $response;
    }

}

