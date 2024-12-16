<?php

$product = array();
$product['description'] = 'Sugar';
$product['price'] = 100;
$product['quantity'] = 8;

$object = new stdClass;

foreach ($product as $key => $value) {
    $object->$key = $value;
}

print_r($object);