<?php


namespace Projet\Models\Admin;



class AdminModel extends \Projet\Models\Manager
{
    public function creatAdmin($mail, $mdp)
    {

        $bdd = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO coordonnees($mail, $mdp) 
                              INNER JOIN producteur 
                              ON            coordonnes_producteur = id_producteur  
                              VALUE (?, ?)');
        $req->execute(array($mail, $mdp));



        return $req;
    }

    public function recupInfo($mail, $mdp)
    {

        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT id, mail, mdp FROM producteur WHERE mail = ?');
        $req->execute(array($mail));



        return $req;
    }
    public function listerProduit()
    {
        $bdd = $this->dbConnect();
        $reqListe = $bdd->prepare('SELECT name, alt, description, price, 
                                   FROM product 
                                   INNER JOIN categories 
                                   ON product.categories_id = categories.id 
                                   WHERE id= ?
                                   ORDER BY id DESC');
        $reqListe->execute(array());

        return $reqListe;
    }

    public function ajouterProduitBdd()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO product VALUE (?,?,?,?)');
        $req->execute((array()));
    }
}
