<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';
require_once('Controllers/controllerFront.php');


try {

    $controllerFront = new \Projet\Controllers\controllerFront();
    if(isset($_GET['page'])) {
        
        if($_GET['page'] == 'accueil') {
            $controllerFront->home();
        }

        if ($_GET['page'] == 'contact') {
            $controllerFront->contact();
        }

        else {
            throw new Exception("Cette page n'existe pas ou a été supprimée.");
        }
    }
    else {
        $controllerFront->home();
    }
}
catch(Exception $e) {
    $error = $e->getMessage();
    require('Views/front/errorView.php');
}