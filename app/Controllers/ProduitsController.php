<?php

namespace Projet\Controllers;

class ProduitsController
{
    public function returnProduct()
    {
        $produits = new \Projet\Models\front\ProduitModel();

        require 'app/Views/front/produitView.php';
    }

   
} 