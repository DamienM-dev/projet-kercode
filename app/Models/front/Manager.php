<?php

namespace Projet\Models;

use Exception;
use PDO;

class Manager {
    protected function dbConnect():PDO{
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=producteur;charset=utf8', 'root', '', array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION ));
        }
        catch (Exception $e){
            die('Erreur : ' .$e->getMessage());
        }
        return $bdd;
    }
}