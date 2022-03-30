<?php


namespace Projet\Models;



class AdminModel extends Manager
{
    public function creatAdmin($mail, $mdp)
    {

        $bdd = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO coordonnees($mail, $mdp) 
                              INNER JOIN producteur 
                              ON coordonnes_producteur = id_producteur  
                              VALUE (?, ?)');
        $req->execute(array($mail, $mdp));

        var_dump($req);

        return $req;
    }
    public function recupInfo($mail, $mdp)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT mail, mdp FROM coordonnees INNER JOIN producteur ON coordonnes.coordonnees_producteur = producteur.id  WHERE mail=?');
        $req->execute(array($mail));

        return $req;
    }
    //PLUS VALABLE

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
}
