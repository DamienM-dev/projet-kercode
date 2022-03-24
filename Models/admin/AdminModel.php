<?php


namespace Projet\Models;

require_once 'Models/front/Manager.php';

    class AdminModel extends Manager
    {
        public function recupInfo($mail, $mdp)
        {
            $bdd = $this->dbConnect();
            $req = $bdd->prepare('SELECT id FROM client INNER JOIN coordonnees ON id.client = id.coordonnees  WHERE mail=?');
            $req -> execute(array($mail));

            return $req;
        }
        //penser à voir comment faire jointure pour récupére le reste des infos
    }