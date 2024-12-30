<?php

$pagseguro = new \Facades\PagSeguroFacade('BRL');

$product = new StdClass();
$product->id = 5;
$product->description = 'Pendrive';
$product->price = 15;

$pagseguro->addItem($product, 3);

$customer = new StdClass();
$customer->address = ['rua' => 'Rua dos Santos', 'number' => '123'];
$customer->number = 123;
$customer->neighborhood = 'Bairro dos Santos';
$customer->city = 'Feira de Caatinga';
$customer->state = 'CE';
$customer->email = 'john.doe@example.com';
$customer->name = 'John Doe';
$pagseguro->setCustomer($customer);