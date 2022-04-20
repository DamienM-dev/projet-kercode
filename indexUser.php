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
  
      echo $html;
    }
  }


try {
    $userController = new \Projet\Controllers\UserController();

    if (isset($_GET['action'])) {

        //========CREATION de l'utilisateur========

        if ($_GET['action'] == 'creatUser') {

            try {

                $civility   = htmlspecialchars($_POST['civility']);
                $lastname   = htmlspecialchars($_POST['lastname']);
                $firstname  = htmlspecialchars($_POST['firstname']);
                $address    = htmlspecialchars($_POST['address']);
                $codePostal = htmlspecialchars($_POST['codePostal']);
                $ville      = htmlspecialchars($_POST['ville']);
                $mail       = htmlspecialchars($_POST['mail']);
                $phone      = htmlspecialchars($_POST['phone']);
                $mdp        =                  $_POST['mdp'];
                $rgpd       =htmlspecialchars($_POST['rgpd']);
    
                $mdp        = password_hash($mdp, PASSWORD_DEFAULT);
    
                $data = [
    
                    'civility'      => $civility,
                    'lastname'      => $lastname,
                    'firstname'     => $firstname,
                    'address'       => $address,
                    'codePostal'    => $codePostal,
                    'ville'         => $ville,
                    'mail'          => $mail,
                    'phone'         => $phone,
                    'mdp'           => $mdp,
                    'rgpd'          => $rgpd
                ];
                
    
    
                $userController->createUser($data);
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
        }



        //========CONNEXION de l'utilisateur========

        if ($_GET['action'] == 'connexionUser') {
            $mail = htmlspecialchars($_POST['mail']);
            $mdp  = $_POST['mdp'];


            if (!empty($mail) && !empty($mdp)) {
                $backController->connexionUser($mail, $mdp);
            } else {
                throw new Exception('Veuillez renseigner vos identifiants');
            }
        }
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