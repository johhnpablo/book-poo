<?php

require_once 'class/Conta.php';
require_once 'class/ContaCorrente.php';
require_once 'class/ContaPoupanca.php';

//create objects

$contas = [];
$contas [] = new ContaCorrente(100, "CC.1234.55", 100, 500);
$contas [] = new ContaPoupanca(100, "CP.3344.62", 100);

// loop of accounts

foreach ($contas as $conta) {
    print "Conta: {$conta->getInfo()}" . PHP_EOL;
    print "Saldo atual: {$conta->getSaldo()}" . PHP_EOL;

    $deposito_valor = 200;
    $conta->depositar($deposito_valor);

    print "Depósito de : {$deposito_valor}" . PHP_EOL;
    print "Saldo atual: {$conta->getSaldo()}" . PHP_EOL;

    if($conta->retirar($value = 700)){
        print "Retirada de : {$value}" . PHP_EOL;
    } else{
        print "Retirada de : {$value} | Não permitida -> Saldo Insuficiente" . PHP_EOL;
    }

    print "Saldo atual : {$conta->getSaldo()}" . PHP_EOL;
}