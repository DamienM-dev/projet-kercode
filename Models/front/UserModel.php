<?php

namespace Projet\Models;

    class UserModel extends Manager {

        public function createUser($data) {

        $bdd = $this->dbConnect();
        $user = $bdd->prepare('INSERT INTO coordonnees(lastname,firstname, address,CP,mail,phone,mdp) VALUE (?,?,?,?,?,?,?)');
        $user->execute(array([
            'lastname'  => $data['lastname'],
            'firstname' => $data['firstname'],
            'address'   => $data['address'],
            'CP'        => $data['CP'],
            'mail'      => $data['mail'],
            'phone'     => $data['phone'],
            'mdp'       => $data['mdp']
        ]));
        
        return $user;
    }

}
