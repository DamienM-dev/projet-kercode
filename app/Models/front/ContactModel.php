<?php

namespace Projet\Models\front;

use Exception;

class ContactModel extends \Projet\Models\Manager
{
    public function postMail($contactData)
    {

        try {

            $bdd = $this->dbConnect();
        
            $postMail = $bdd->prepare('INSERT INTO contact(civility, lastname, firstname, phone, mail, raison, content) VALUE (:civility, :lastname, :firstname, :phone, :mail, :raison, :content) ');
            // var_dump($contactData);die;
            $postMail->execute(array(
                ':civility'     => $contactData['civility'],
                ':lastname'     => $contactData['lastname'],
                ':firstname'    => $contactData['firstname'],
                ':phone'        => $contactData['phone'],
                ':mail'         => $contactData['mail'],
                ':raison'       => $contactData['raison'],
                ':content'      => $contactData['content']
            ));
            
            return $postMail;
            
            
        } catch (Exception $e) {
            $error = $e->getMessage();
            
        }
    }
}

