<?php

namespace Projet\Models;

class ContactModel extends Manager
{
    public function postMail($civility, $lastname, $firstname, $phone, $mail,  $raison, $content)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO contacts( $civility, $lastname, $firstname, $phone, $mail,  $raison, $content) VALUE(?, ?, ?, ?, ?, ?, ?)');
        $req->execute(array($civility, $lastname, $firstname, $phone, $mail,  $raison, $content));
        
        return $req;
    }
}