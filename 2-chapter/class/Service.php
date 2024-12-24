<?php

use Interfaces\BudgetableInterface;

class Service implements BudgetableInterface
{
    private $description;
    private $price;

    public function __construct($description, $price)
    {
        $this->description = $description;
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}