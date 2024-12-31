<?php

try {
    $conn = new PDO(
        "pgsql:dbname=livro;user=postgres;password=1234;host=localhost;port=5432"
    );

    $result = $conn->query("SELECT code, name FROM famosos");
    if ($result){
        foreach ($result as $row){
            echo $row["code"] . " - " . $row["name"] . "\n";
        }
    }
    $conn = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}