<?php

//No use getters and setters.
class Product{
    public $name;
    public $price;
    public $quantity;
    public $description;
}

$product_one = new Product();
$product_one->name = 'Chocolate';
$product_one->price = 10;
$product_one->quantity = 5;
$product_one->description = 'Chocolate Belga - Clássico';

$product_two = new Product();
$product_two->name = 'Pipoca';
$product_two->price = 2;
$product_two->quantity = 10;
$product_two->description = 'Pipoca Salgada';

var_dump($product_one);
var_dump($product_two);


