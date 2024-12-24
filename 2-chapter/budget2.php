<?php

require_once 'class/Budget.php';
require_once 'Interfaces/BudgetableInterface.php';
require_once 'class/Product.php';
require_once 'class/Service.php';
$budget = new Budget();

$budget->add( new Product('Máquina de café', 10, 299), 1 );
$budget->add( new Product('Barbeador elétrico', 10, 170), 1 );
$budget->add( new Product('Barra de chocolate', 10, 7), 3 );
$budget->add( new Service('Corte de grama', 20), 1 );
$budget->add( new Service('Corte de barba', 20), 1 );
$budget->add( new Service('Limpeza do apto', 50), 1 );

print $budget->totalCalculates();