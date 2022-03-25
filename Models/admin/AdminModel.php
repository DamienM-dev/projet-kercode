<?php


namespace Projet\Models;

require_once 'Models/front/Manager.php';

    class AdminModel extends Manager
    {
        public function recupInfo($mail)
        {
            $bdd = $this->dbConnect();
            $req = $bdd->prepare('SELECT id, mail, mdp FROM client INNER JOIN coordonnees ON id.client = coordonnees_client.coordonnees  WHERE mail=?');
            $req -> execute(array($mail));

            var_dump($req);
            die;
            return $req;
        }
        //penser à voir comment faire jointure pour récupére le reste des infos
    }