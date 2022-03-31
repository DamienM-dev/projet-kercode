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
}
