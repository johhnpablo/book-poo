<?php

try {
    $conn = new PDO(
        "pgsql:dbname=livro;user=postgres;password=1234;host=localhost;port=5432"
    );

    $conn->exec("INSERT INTO famosos (code, name) VALUES (1, 'Manteigados')");
    $conn->exec("INSERT INTO famosos (code, name) VALUES (2, 'Chocolatados')");
    $conn->exec("INSERT INTO famosos (code, name) VALUES (3, 'Patrick')");
    $conn->exec("INSERT INTO famosos (code, name) VALUES (4, 'Bob Esponja')");
    $conn->exec("INSERT INTO famosos (code, name) VALUES (5, 'Lula Molusco')");
    $conn->exec("INSERT INTO famosos (code, name) VALUES (6, 'Sr. Siriguejo')");
    $conn->exec("INSERT INTO famosos (code, name) VALUES (7, 'Placton')");

    //close connection;

    $conn = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . PHP_EOL;
}