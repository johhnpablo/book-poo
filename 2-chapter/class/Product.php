<?php

use Interfaces\BudgetableInterface;

class Product implements BudgetableInterface
{
    private $description;
    private $stock;
    private $price;
    private $factory;
    private array $features;

    public function __construct($description, $stock, $price)
    {
        $this->description = $description;
        $this->stock = $stock;
        $this->price = $price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setFactory(Factory $factory)
    {
        $this->factory = $factory;
    }

    public function getFactory()
    {
        return $this->factory;
    }

    public function setFeature($name, $value)
    {
        $this->features[] = new Feature($name, $value);
    }

    public function getFeatures()
    {
        return $this->features;
    }
}