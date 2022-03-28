<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';




try {

    $controllerFront = new \Projet\Controllers\ControllerFront();
    if (isset($_GET['page'])) {

        if ($_GET['page'] == 'accueil') {
            $controllerFront->home();
        }

        if ($_GET['page'] == 'contact') {
            $controllerFront->contact();

        } elseif ($_GET['page'] == 'login') {
            $controllerFront->login();

        } elseif ($_GET['page'] == 'aProposView') {
            $controllerFront->aProposView();

        } elseif ($_GET['page'] == 'produitView') {
            $controllerFront->produitView();

        } elseif ($_GET['page'] == 'donneesPersoView') {
            $controllerFront->donneesPerso();

        } elseif ($_GET['page'] == 'mentionsLegalesView') {
            $controllerFront->mentionsLegales();

        } elseif ($_GET['page'] == 'pageConnexionUser') {
            $controllerFront->pageConnexionUser();

        } elseif ($_GET['page'] == 'pageConnexionAdmin') {

            $controllerFront->pageConnexionAdmin();

        } elseif ($_GET['page'] == 'contactPost') {

            $civility   = htmlspecialchars($_POST['civility']);
            $lastname   = htmlspecialchars($_POST['lastname']);
            $firstname  = htmlspecialchars($_POST['firstname']);
            $phone      = htmlspecialchars($_POST['phone']);
            $mail       = htmlspecialchars($_POST['mail']);
            $raison     = htmlspecialchars($_POST['raison']);
            $content    = htmlspecialchars($_POST['content']);

            $contactData = [
                
                'civility'  => $civility,
                'lastname'  => $lastname,
                'firstname' => $firstname,
                'phone'     => $phone,
                'mail'      => $mail,
                'raison'    => $raison,
                'content'   => $content
            ];
            
            if (!empty($civility) && (!empty($lastname) && (!empty($firstname) && (!empty($phone) && (!empty($mail) && (!empty($raison) && (!empty($content)))))))) {
                $frontController->contactPost($contactData);
            }
        } else {
            throw new Exception("Cette page n'existe pas ou a été supprimée.");
        }
    } else {
        $controllerFront->home();
    }
} catch (Exception $e) {
    $error = $e->getMessage();
    require('app/Views/front/errorView.php');
}

//pense bête pour plustard
// Verifier doublons de mon email :
// $req = 'SELECT COUNT (email) AS existe FROM client where email = ?'
// $req->execute($email)

// while($result = $req->fetch()
// if( $result[existe] !=0)){
    // header('location...email existe déjà)
//}