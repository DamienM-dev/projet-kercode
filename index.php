<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';
require_once 'Controllers/ControllerFront.php';


try {

    $controllerFront = new \Projet\Controllers\ControllerFront();
    if(isset($_GET['page'])) {
        
        if($_GET['page'] == 'accueil') {
            $controllerFront->home();
        }

        // if ($_GET['page'] == 'contact') {
        //     $controllerFront->contact();
        // }

        elseif ($_GET['action'] == 'contactPost') {
            $civility = htmlspecialchars($_POST['civility']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $firstname = htmlspecialchars($_POST['firstname']);
            $phone = htmlspecialchars($_POST['phone']);
            $mail = htmlspecialchars($_POST['mail']);
            $raison = htmlspecialchars($_POST['raison']);
            $contact = htmlspecialchars($_POST['contact']);

            if (!empty($civility) && (!empty($lastname) && (!empty($firstname) && (!empty($phone) && (!empty($mail) && (!empty($raison) && (!empty($contact)))))))) {
                $frontController->contactPost($civility, $lastname, $firstname, $phone, $mail,  $raison, $content);

            }
             
        } else {
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