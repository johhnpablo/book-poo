<?php

class Product
{
    private $description;
    private $price;
    private $quantity;

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function addQuantity($quantity)
    {
        $this->quantity += $quantity;
    }

    public function removeQuantity($quantity)
    {
        $this->quantity -= $quantity;
    }

    public function adjustPrice($percentage)
    {
        if (!is_numeric($percentage) AND $percentage <= 0) {
            echo 'Not a valid percentage';
            return;
        }
        $this->price *= ($percentage / 100);
    }
}

$product = new Product();
$product->setDescription('PHPPOO');
$product->setPrice(100);
$product->setQuantity(10);

$product->addQuantity(10);
$product->removeQuantity(10);
$product->adjustPrice(10);

print $product->getDescription() . PHP_EOL;
print $product->getPrice() . PHP_EOL;
print $product->getQuantity() . PHP_EOL;
