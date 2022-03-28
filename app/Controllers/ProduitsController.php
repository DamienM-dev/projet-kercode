<?php

namespace Projet\Controllers;

class ProduitsController
{
    private string $name;
    private string $img;
    private string $alt;
    private float $price;

    function __construct(string $name, string $img, string $alt, float $price )
    {
        $this->name     = $name;
        $this->img      = $img;
        $this->alt      = $alt;
        $this->price    = $price;
    }

    public function returnName():string {
        return $this->name;
    }

    public function returnImg():string {
        return $this->img;
    }

    public function returnAlt():string {
        return $this->alt;
    }
    public function returnPrice():float {
        return $this->price;
    }
} 