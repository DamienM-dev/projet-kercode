<?php


namespace Projet\Models;

class ProduitModel extends Manager
{
    public function returnProduct($name, $price, $img, $alt)
    {

        
        $bdd = $this->dbConnect();
        $produit = $bdd->prepare('SELECT name, price, img, alt from product');
        $produit ->execute(array($name, $price, $img, $alt));

    }

}
