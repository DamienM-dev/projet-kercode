<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';


try {

    $controllerFront = new \Projet\Controllers\controllerFront();
    if(isset($_GET['page'])) {
        if($_GET['page'] == 'accueil') {
            $controllerFront->home();
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