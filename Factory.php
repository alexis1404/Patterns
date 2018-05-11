<?php

abstract class Product
{
    abstract function getItemName();
}

class Shirt extends Product
{
    function getItemName()
    {
        echo 'It`s shirt <br>';
    }
}

class Pant extends Product
{
    function getItemName()
    {
        echo 'It`s pant <br>';
    }
}

abstract class ProductsFactoryAbstract
{
    public function create($type)
    {
        switch ($type){
            case 'shirt':
                return new Shirt();
            case 'pant':
                return new Pant();
            default :
                return new Shirt();
        }
    }
}

class ProductFactory extends ProductsFactoryAbstract
{
    
}

$factory = new ProductFactory();

$shirt = $factory->create('shirt');

$shirt->getItemName();

$pant = $factory->create('pant');

$pant->getItemName();