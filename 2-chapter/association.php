<?php

require_once 'class/Factory.php';
require_once 'class/Product.php';
require_once 'class/Feature.php';

$product1 = new Product('Chocolate', 10, 7);
$factory1 = new Factory('Chocolate Factory', 'Willy Wonka Street', '12345678901');

//association relationship

$product1->setFactory($factory1);

print 'A descrição é ' . $product1->getDescription() . PHP_EOL;
print 'O Fabricante é ' . $product1->getFactory()->getName() . PHP_EOL;
print PHP_EOL;
// Features
print 'Features - Características:' . PHP_EOL;
print PHP_EOL;

$product1->setFeature('Cor', 'Branco');
$product1->setFeature('Peso', '2.6 kg');
$product1->setFeature('Intensidade', 'Média');

print 'Product: ' . $product1->getDescription() . PHP_EOL;

foreach ($product1->getFeatures() as $feature) {
    print 'Features - Característica:' . PHP_EOL;
    print 'Name:'. $feature->getName() . PHP_EOL;
    print 'Value:'. $feature->getValue() . PHP_EOL;
    print PHP_EOL;
}



