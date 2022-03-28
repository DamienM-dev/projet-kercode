<?php

namespace Projet\Controllers;

class ProduitsController
{
    public function returnProduct()
    {
        $produit = new \Projet\Models\ProduitModel();

        require 'app/Views/front/produitView.php';
    }

   
} 