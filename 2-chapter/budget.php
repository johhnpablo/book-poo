<?php

require_once('class/Product.php');
require_once('class/Budget.php');

$budget = new Budget();

$budget->add(new Product('Máquina de café', 10, 200), 1);
$budget->add(new Product('Liquidificador', 10, 150), 1);
$budget->add(new Product('Geladeira', 10, 2200), 3);

print $budget->totalCalculates();