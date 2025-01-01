<?php

try{
    $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=book', 'root', 'password');
    $conn->exec("INSERT INTO famosos (code, name) VALUES (1, 'Juan Pablo')");
    $conn->exec("INSERT INTO famosos (code, name) VALUES (2, 'Alfredo Carrasco')");
    $conn->exec("INSERT INTO famosos (code, name) VALUES (23, 'Augusto Lesadu')");
    $conn->exec("INSERT INTO famosos (code, name) VALUES (33, 'Arrascaeta Souza')");
    $conn->exec("INSERT INTO famosos (code, name) VALUES (333, 'Felipe da Vaca')");
    $conn->exec("INSERT INTO famosos (code, name) VALUES (3312, 'Pedro das Porcas')");

    $conn = null;
} catch (Exception $e)
{
    print "Error!: " . $e->getMessage() . PHP_EOL;
}