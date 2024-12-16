<?php

$product = new StdClass();
$product->description = 'Chocolate Amargo';
$product->price = 100;
$product->quantity = 1;

$vector1 = (array) $product;
print_r($vector1["description"]);
$vector2 = [
    'description' => "Café Amargo",
    'price' => 100,
    'quantity' => 1,
];

$product2 = (object) $vector2;

print_r($product2->description);

