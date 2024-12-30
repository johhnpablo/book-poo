<?php

require_once 'App/Lib/PagSeguro/PagSeguroLibrary.php';

$payment_request = new PagSeguroPaymentRequest();
$payment_request->setCurrency('BRL');

//item
$item = new PagSeguroItem();
$item->setId($product->id);
$item->setDescription($product->description);
$item->setQuantity($data->amount);
$item->setAmount($product->price);
$payment_request->addItem($item);

// address
$address = new PagSeguroAddress();
$address->setStreet($customer->address);
$address->setNumber($customer->number);
$address->setDistrict($customer->neighborhood);
$address->setCity($customer->city);
$address->setState($customer->state);
$payment_request->addAddress($address);

// customer
$sender = new PagSeguroSender();
$sender->setEmail(trim($customer->email));
$sender->setName(trim($customer->name));
$payment_request->setSender($sender);

$payment_request->setRedirectUrl("$host/confirmation.html");
$credentials = new PagSeguroAccountCredentials($ini['account'], $ini['token']);
$url = $payment_request->register($credentials);

// Esse código não funcionará, é apenas um exemplo de implementação de Facades.
// Falta nele credenciais corretas, e algumas outras classes necessárias.