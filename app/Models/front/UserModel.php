<?php

namespace Projet\Models\front;


class UserModel extends \Projet\Models\Manager
{

    public function creatUser($data)
    {

        $bdd = $this->dbConnect();


        $user = $bdd->prepare('INSERT INTO client(civility, lastname, firstname, address, codePostal, ville, mail, phone, mdp, rgpd) VALUE (:civility, :lastname, :firstname, :address, :codePostal, :ville, :mail, :phone, :mdp, :rgpd)');
        $user->execute(array(
            
            ':civility'   => $data['civility'],
            ':lastname'   => $data['lastname'],
            ':firstname'  => $data['firstname'],
            ':address'    => $data['address'],
            ':codePostal' => $data['codePostal'],
            ':ville'      => $data['ville'],
            ':mail'       => $data['mail'],
            ':phone'      => $data['phone'],
            ':mdp'        => $data['mdp'],
            ':rgpd'       => $data['rgpd']
        ));
        
        return $user;
        
    }

    //==============CONNEXION USER============================

    public function recupInfoUser($mail)
    {

        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT id, mail, mdp, firstname FROM client WHERE mail = ?');
        $req->execute(array($mail));



        return $req;
    }
}

// pour la value :nom au lieu de ? car c'est une requéte contenant une clé=>valeur ? A confirmer !
