<?php

namespace Projet\Models;

class Manager {
    protected function dbConnect(){
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=producteur;charset=utf8', 'root', '');
        }
        catch (Exception $e){
            die('Erreur : ' .$e->getMessage());
        }
        return $bdd;
    }
}