<?php


namespace Projet\Models\front;

class ProduitModel extends \Projet\Models\Manager
{
    private ?string $name;
    private ?string $img;
    private ?string $alt;
    private ?float $price;

    //Le ?string pour expliquer que la variable peut être null

    function __construct(array $data=[])
    {
        $this->name     = $data['name'] ?? null;
        $this->img      = $data['img'] ?? null;
        $this->alt      = $data['alt'] ?? null;
        $this->price    = $data['price'] ?? null;
    }

    public function returnName():string {

        $bdd = $this->dbConnect();
        $produits = $bdd->prepare('SELECT name from product WHERE id=?');
        $produits->execute(array());

        return $this->name;
    }

    public function returnImg():string {

        $bdd = $this->dbConnect();
        $produits = $bdd->prepare('SELECT img from product WHERE id=?');
        $produits->execute(array());

        return $this->img;
    }

    public function returnAlt():string {

        $bdd = $this->dbConnect();
        $produits = $bdd->prepare('SELECT alt from product WHERE id=?');
        $produits->execute(array());

        return $this->alt;
    }
    public function returnPrice():float {

        $bdd = $this->dbConnect();
        $produits = $bdd->prepare('SELECT price from product WHERE id=?');
        $produits->execute(array());

        return $this->price;
    }

    public function returnProducts()
    {

        
        $bdd = $this->dbConnect();
        $produits = $bdd->query('SELECT name, price, img, alt from product');
        
        return $produits;
     }

     public function listerProduitDashboard()
    {
        $bdd = $this->dbConnect();
        $reqListe = $bdd->prepare('SELECT name, alt, description, price 
                                   FROM product 
                                   INNER JOIN categories 
                                   ON product.categories_id = categories.id 
                                   WHERE id= ?
                                   ORDER BY id DESC');
        $reqListe->execute(array());

        return $reqListe;
    }
}
