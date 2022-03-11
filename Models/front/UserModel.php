<?php

namespace Projet\Models;

require_once 'Models/front/Manager.php';

    class UserModel extends Manager
    {

        public function creatUser($data)
        {

        $bdd = $this->dbConnect();
        
      
        $user = $bdd->prepare('INSERT INTO coordonnees(lastname, firstname, address, CP, mail, phone, mdp) VALUE (:lastname, :firstname, :address, :CP, :mail, :phone, :mdp)');
        $user->execute(array(
            ':lastname'   => $data['lastname'],
            ':firstname'  => $data['firstname'],
            ':address'    => $data['address'],
            ':CP'         => $data['CP'],
            ':mail'       => $data['mail'],
            ':phone'      => $data['phone'],
            ':mdp'        => $data['mdp']
        ));
        
        return $user;
    }

    public function recupMdp($mail, $mdp)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT mail, mdp FROM coordonnees  WHERE mail=?');
        $req->execute(array($mail));

        return $req;
    }

}

// pour la value :nom au lieu de ? car c'est une requéte contenant une clé=>valeur ? A confirmer !
