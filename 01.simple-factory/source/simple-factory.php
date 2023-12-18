<?php

interface Product
{
    public function show();
}

class ProductA implements Product
{
    public function show()
    {
        echo "show ProductA";
    }
}

class ProductB implements Product
{
    public function show()
    {
        echo "show ProductB";
    }
}

class Factory
{
    public static function createProduct(string $type) : Product
    {
        $product = null;
        switch ($type) {
            case "A" :
                $product = new ProductA();
                break;
            case "B":
                $product = new ProductB();
                break;
        }
        return $product;
    }
}

$productA = Factory::createProduct("A");
$productB = Factory::createProduct("B");
$productA->show();
$productB->show();
