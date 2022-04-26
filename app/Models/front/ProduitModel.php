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
        $produits = $bdd->query('SELECT id, name, description, price, img, alt from product ');

        return $produits;
    }

    //compte le nombre de produit sur la page produit
    public function countProduct()
    {
        $bdd = $this->dbConnect();
        $produitsCount = $bdd->query('SELECT count(id) as cnt from product WHERE id ');
        

        return $produitsCount;

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


//modifie produit en bdd depuis dashboard


      public function modifierProduit($id, $name, $description, $price, $categories, $alt, $img)
      {
          try {
                $bdd = $this->dbConnect();
                $produit = $bdd->prepare('UPDATE product 
                                          SET product.id = :id, product.name = :name, description = :description, price = :price, categories_id = :categories_id, alt= :alt, img = :img
                                          WHERE id = :id');
                    $produit->execute(array(

                        ':name'             =>$name,
                        ':description'      =>$description,
                        ':price'            =>$price,
                        ':alt'              =>$alt,
                        ':categories_id'    =>$categories,
                        ':img'              =>$img,
                        ':id'               =>$_GET['id']
                    ));
              

                    return $produit;


} catch (Exception $e) {

   
            die('Erreur : ' .$e->getMessage());
          }
      }


        //Ajoute produit en bdd depuis dashboard

      public function ajouterProduitBdd($name, $description, $price, $categories,  $alt, $img)
      {


        try {
           
            
            $bdd = $this->dbConnect();

            $ajouterProduit = $bdd->prepare("INSERT INTO product (product.name, description, price, alt, categories_id, img)
                                            VALUES (:name, :description, :price, :alt, :categories_id, :img)");

                           $ajouterProduit->execute(array(
                               ':name'=>$name,
                               ':description'=>$description,
                               ':price'=>$price,
                               ':alt'=>$alt,
                               ':categories_id'=>$categories,
                               ':img'=>$img
                           ));
            
            return $ajouterProduit;
            
           
        }
        catch (Exception $e) {

          die('Erreur : ' .$e->getMessage());
        }
    }
  
}
