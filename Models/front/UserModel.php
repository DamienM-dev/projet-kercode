<?php
    class UserModel extends Manager {

        public function createUser($lastname, $firstname, $address, $CP, $mail, $phone, $mdp) {

        $bdd = $this->dbConnect();
        $user = $bdd->prepare('INSERT INTO coordonnees(lastname, firstname, address, CP, mail, phone, mdp) VALUE (?,?,?,?,?,?,?)');
        $user->execute(array($info = [
            'lastname'  => $lastname,
            'firstname' => $firstname,
            'address'   => $address,
            'CP'        => $CP,
            'mail'      => $mail,
            'phone'     => $phone,
            'mdp'       => $mdp
        ]));
        
        return $user;
    }

}

?>