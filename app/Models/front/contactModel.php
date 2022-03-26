<?php

namespace Projet\Models;

class ContactModel extends Manager
{
    public function postMail($contactData)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO contact( $civility, $lastname, $firstname, $phone, $mail,  $raison, $content) VALUE(:civility, :lastname, :firstname, :phone, :mail,  :raison, :content)');
        $req->execute(array(
            ':civility'     => $contactData['civility'],
            ':lastname'     => $contactData['lastname'],
            ':firstname'    => $contactData['firstname'],
            ':phone '       => $contactData['phone'],
            ':mail '        => $contactData['mail'],
            ':raison '      => $contactData['raison'],
            ':content'      => $contactData['content']
        ));
        
        return $req;
    }
}

