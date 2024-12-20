<?php

require_once 'class/Product.php';
require_once 'class/Basket.php';

$basket1 = new Basket();

$basket1->addItem($product1 = new Product('Chocolate', 10, 7));
$basket1->addItem($product2 = new Product('Café', 100, 12));
$basket1->addItem($product3 = new Product('Pão', 1000, 1));

foreach ($basket1->getItems() as $item) {
    print 'Item: ' . $item->getDescription() . PHP_EOL;
}