<?php


namespace Projet\Models\front;

use Exception;

class ProduitModel extends \Projet\Models\Manager
{

    private ?string $name;
    private ?string $img;
    private ?string $alt;
    private ?float $price;

    //Le ?string pour expliquer que la variable peut être null

    function __construct(array $data = [])
    {
        $this->name     = $data['name'] ?? null;
        $this->img      = $data['img'] ?? null;
        $this->alt      = $data['alt'] ?? null;
        $this->price    = $data['price'] ?? null;
    }
        //getter pour nom
    public function returnName(): string
    {

        $bdd = $this->dbConnect();
        $produits = $bdd->prepare('SELECT name from product WHERE id=?');
        $produits->execute(array());

        return $this->name;
    }
        //getter pour image
    public function returnImg(): string
    {

        $bdd = $this->dbConnect();
        $produits = $bdd->prepare('SELECT img from product WHERE id=?');
        $produits->execute(array());

        return $this->img;
    }
        //getter pour alt
    public function returnAlt(): string
    {

        $bdd = $this->dbConnect();
        $produits = $bdd->prepare('SELECT alt from product WHERE id=?');
        $produits->execute(array());

        return $this->alt;
    }
        //getter pour prix
    public function returnPrice(): float
    {

        $bdd = $this->dbConnect();
        $produits = $bdd->prepare('SELECT price from product WHERE id=?');
        $produits->execute(array());

        return $this->price;
    }
        //return  DES produits
    public function returnProducts()
    {

        $bdd = $this->dbConnect();
        $produits = $bdd->query('SELECT name, price, img, alt from product');

        return $produits;
    }

      //return UN produit grace ID

      public function returnProduct($id)
      {
          try {

              $bdd = $this->dbConnect();
              $produits = $bdd->prepare("SELECT product.id, product.name, description, price
                                         FROM product 
                                         INNER JOIN categories 
                                         ON product.categories_id = categories.id 
                                         WHERE product.id = ?");
              $produits->execute(array('id'));
              
              
              return $produits->fetch();
          }
          catch (Exception $e) {
            die('Erreur : ' .$e->getMessage());
          }
      }

      public function ajouterProduitBdd()
      {
        try {

            $bdd = $this->dbConnect();
            $ajouterProduit = $bdd->prepare("INSERT INTO product name, description, price, img VALUE (?,?,?,?)");
            $ajouterProduit->execute(array());
            
            return $ajouterProduit;
           
        }
        catch (Exception $e) {
          die('Erreur : ' .$e->getMessage());
        }
    }

   

    
    
}
