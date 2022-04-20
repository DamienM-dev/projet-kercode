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


    $backController = new \Projet\Controllers\AdminController();

        //création admin

    if (isset($_GET['action'])) {

        if ($_GET['action'] == 'creatAdmin') {

            $lastnameError = $firstnameError = $mailError = $mdpError= "";

            if(empty ($lastnameError)){

                $lastnameError = "Nom de famille obligatoire !";
            }

            if(empty ($firstnameError)){

                $firstnameError = "prénom obligatoire !";

            }

            if(empty ($mailError)){

                $lastnameError = "email obligatoire !";
            }

            if(empty ($mdpError)){

                $mdpError = "mot de passe obligatoire !";

            }
    
                $lastname    = htmlspecialchars($_POST['lastname']);
                $firstname   = htmlspecialchars($_POST['firstname']);
                $mail        = htmlspecialchars($_POST['mail']);
                $mdp         =                  $_POST['mdp'];
    
                $mdp         = password_hash($mdp, PASSWORD_DEFAULT);
    
                $backController->createAdmin($lastname, $firstname,$mail, $mdp);
           
        }
    
        //connexion admin
        
        elseif ($_GET['action'] == 'connexionAdmin') {

            $mail = htmlspecialchars($_POST['mail']);
            $mdp  = $_POST['mdp'];
            

            if (!empty($mail) && !empty($mdp)) {
                $backController->connexionAdmin($mail, $mdp);
            } else {
                throw new Exception('Veuillez remplir les champs du formulaire');
            }

 
        } elseif ($_GET['action'] == 'deconnexionAdmin') {

            $backController->deconnexionAdmin();
        
        //Vu d'un produit sur le Dashbboard

       } elseif ($_GET['action'] == 'voirProduit') {
            $id = $_GET['id'];
            
            
            $backController->ViewProductAdmin($id);
            
            
            //afficher view du formulaire d'ajout en bdd
            
        } elseif ($_GET['action'] == 'ajouterProduitView') {
            $backController->ajouterProduitView();
            
        }

        //ajoute un produit en bdd

        elseif ($_GET['action'] == 'ajouterProduit') {
            
            
            $name          = htmlspecialchars($_POST['name']);
            $description   = htmlspecialchars($_POST['description']);
            $price         = htmlspecialchars($_POST['price']);
            $categories    = htmlspecialchars( $_POST['categories']);
            $alt           = htmlspecialchars( $_POST['alt']);
            $img           = htmlspecialchars($_POST['img']);
            
            
            $backController->ajouterProduit($name, $description, $price, $categories, $alt, $img);
            
            //DELETE produit depuis dashboard

        }elseif ($_GET['action'] == 'deleteProduit') {
            
            $id = $_GET['id'];
            $backController->deleteProduit($id);
            
            //page CONFIRMATION DELETE

        }elseif ($_GET['action'] == 'confirmationDelete') {

            $id = $_GET['id'];
            $backController->confirmationDelete($id);
            
            //retour à la page dashboard

        }elseif ($_GET['action'] == 'retourDashboard') {
            $backController->retourDashboard();
            
            //affiche page modification produit

        }elseif ($_GET['action'] == 'modifierProduitView') {
            $id = $_GET['id'];
            
            $backController->modifierProduitView($id);
        

            //modifier un produit

        }elseif($_GET['action'] == 'modifierProduit') {
            $id = $_GET['id'];

            $name          = htmlspecialchars($_POST['name']);
            $description   = htmlspecialchars($_POST['description']);
            $price         = htmlspecialchars($_POST['price']);
            $categories    = htmlspecialchars($_POST['categories']);
            $alt           = htmlspecialchars($_POST['alt']);
            $img           = htmlspecialchars($_POST['img']);
           

            $backController->modifierProduit($id, $name, $description, $price, $categories, $alt, $img);
        }elseif($_GET['action'] == 'pageCreationAdmin') {
            $backController->pageCreationAdmin();
        }


    } else {
        echo 'ERREUR !';
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



// catch (Exception $e) {
//     eCatcher($e);
//     if($e->getCode() === 404) {

//         die('Erreur : ' .$e->getMessage());
//     } else {
//         header("location: app/View/front/errorView.php")
//     }
// } catch (Error $e) {
//     eCatcher($e);
//     header("location: app/View/front/errorView.php")
// }

// ajouter catch erroe $e
// var_dump($e): a supprimer avnt l'envois
// gestion en fonction de l'environnement prod ou dev
// utiliser whoops
// zjout du errorHandler

// function eCatcher($e) {
//     if($_ENV["APP_ENV"] == "development") {
//       var_dump($e);die;
//     }