<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


function errorHandler($errno, $errstr) {
    throw new Exception($errno, $errstr);
}

set_error_handler('errorHandler');

function eCatcher($e) {
    if($_ENV["APP_ENV"] == "development") {
      $whoops = new \Whoops\Run;
      $whoops->allowQuit(false);
      $whoops->writeToOutput(false);
      $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
      $html = $whoops->handleException($e);
  
      require 'app/Views/front/errorView.php';
    }
  }


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

        } elseif ($_GET['page'] == 'pagePanier') {

            $controllerFront->pagePanier();

        }elseif ($_GET['page'] == 'contactPost') {
            

            $civility   = htmlspecialchars($_POST['civility']);
            $lastname   = htmlspecialchars($_POST['lastname']);
            $firstname  = htmlspecialchars($_POST['firstname']);
            $phone      = htmlspecialchars($_POST['phone']);
            $mail       = htmlspecialchars($_POST['mail']);
            $raison     = htmlspecialchars($_POST['raison']);
            $content    = htmlspecialchars($_POST['content']);

            $contactData = [
                
                'civility'     => $civility,
                'lastname'     => $lastname,
                'firstname'    => $firstname,
                'phone'        => $phone,
                'mail'         => $mail,
                'raison'       => $raison,
                'content'      => $content
            ];
        
            if (!empty($civility) && (!empty($lastname) && (!empty($firstname) && (!empty($phone) && (!empty($mail) && (!empty($raison) && (!empty($content)))))))) {
                $controllerFront->contactPost($contactData);
                
            }
        } else {
            throw new Exception("Cette page n'existe pas ou a été supprimée.");
        }
    } else {
        $controllerFront->home();
    }
} catch (Exception $e) {
    
    eCatcher($e);
    if($e->getCode === 404) {
        die('Erreur : ' .$e->getMessage());
    } else {
                header("location: app/View/front/errorView.php");
            } 

} catch (Error $e) {
        eCatcher($e);
        header("location: app/View/front/errorView.php");
    }

//pense bête pour plustard
// Verifier doublons de mon email :
// $req = 'SELECT COUNT (email) AS existe FROM client where email = ?'
// $req->execute($email)

// while($result = $req->fetch()
// if( $result[existe] !=0)){
    // header('location...email existe déjà)
//}