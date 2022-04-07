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
              $produit = $bdd->prepare("SELECT product.id, product.name, description, price, img, alt
                                         FROM product 
                                         INNER JOIN categories 
                                         ON product.categories_id = categories.id 
                                         WHERE product.id = ?");
              $produit->execute(array($id));
              
              
              
              return $produit->fetch();
          }
          catch (Exception $e) {
            die('Erreur : ' .$e->getMessage());
          }
      }

      public function ajouterProduitBdd($name, $description, $price, $categories, $img)
      {
        try {

            $bdd = $this->dbConnect();
            $ajouterProduit = $bdd->prepare("INSERT INTO product (product.name, description, price, img)
                                             SELECT categories.id
                                             FROM categories 
                                             INNER JOIN product
                                             ON product.categories_id = categories.id");
            $ajouterProduit->execute(array($name, $description, $price, $categories, $img));
            
            return $ajouterProduit;
            
           
        }
        catch (Exception $e) {
          die('Erreur : ' .$e->getMessage());
        }
    }

   

    
    
}
