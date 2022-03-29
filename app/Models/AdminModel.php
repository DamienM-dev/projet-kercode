<?php


namespace Projet\Models;



class AdminModel extends Manager
{
    public function creatAdmin($mail, $mdp)
    {
    
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO coordonnees($mail, $mdp) INNER JOIN producteur ON coordonnes_producteur = id_producteur  VALUE (?, ?)');
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
    //penser à voir comment faire jointure pour récupére le reste des infos

}
