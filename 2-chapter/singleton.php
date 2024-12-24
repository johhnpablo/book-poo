<?php

require_once 'class/Preferences.php';

//object one
$preferencesOne = Preferences::getInstance();
$preferencesOne->setData('language', 'pt-br');
print 'A linguagem do objeto 1 é: ' . $preferencesOne->getData('language') . PHP_EOL;

//object two
$preferencesTwo = Preferences::getInstance();
print 'A linguagem do objeto 2 é: ' . $preferencesTwo->getData('language') . PHP_EOL;

$preferencesOne->save();