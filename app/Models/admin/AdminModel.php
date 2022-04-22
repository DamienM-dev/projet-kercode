<?php


namespace Projet\Models\Admin;

use Exception;

class AdminModel extends \Projet\Models\Manager
{
    //créer administrateur
    public function creatAdmin($lastname, $firstname, $mail, $mdp)
    {

        $bdd = $this->dbConnect();

        $req = $bdd->prepare('INSERT INTO producteur (lastname, firstname, mail, mdp) VALUE (?, ?, ?, ?)');
        $req->execute(array($lastname, $firstname, $mail, $mdp));



        return $req;
    }

    public function recupInfo($mail)
    {

        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT id, mail, mdp, firstname FROM producteur WHERE mail = ?');
        $req->execute(array($mail));



        return $req;
    }
    
    public $id;

    //Lister les produits de la bdd sur le dashboard
    public function listerProduit()
    {
        $bdd = $this->dbConnect();
        $product = $bdd->prepare("SELECT product.id, product.name, description, price, categories.name as category
                                   FROM product 
                                   INNER JOIN categories 
                                   ON product.categories_id = categories.id 
                                   ORDER BY product.id DESC");
        $product->execute(array());
        

        return $product->fetchAll();
    }

    //DELETE un produit dpuis le dasboard

    public function deleteProduit($id)
    {

        try {

            $bdd = $this->dbConnect();
            $deleteProduit = $bdd->prepare("DELETE FROM product WHERE id = ? ");
            $deleteProduit->execute(array($id));
            
            return $deleteProduit;

        } catch (Exception $e) {
            die('Erreur : ' .$e->getMessage());
          }
        

    }

    // Choix category dans la page ajouterProduitView
    
    public function selectCategory()
    {
        $bdd = $this->dbConnect();
        $categories = $bdd->prepare('SELECT id, name FROM categories');
        $categories->execute(array());

        return $categories->fetchAll();
    }

    //Nombre client

    public function nombreClient()
    {
        $bdd = $this->dbConnect();
        $nombreClient = $bdd->query('SELECT count(id) FROM client WHERE id');

        return $nombreClient;
        
    }
    
    public function countEmail()
    {
        $bdd = $this->dbConnect();
        $emailCount = $bdd->query('SELECT count(content) FROM contact WHERE id');
    
        return $emailCount;
    }
    
}
