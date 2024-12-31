<?php


try {
    $conn = new PDO(
        "pgsql:dbname=livro;user=postgres;password=1234;host=localhost;port=5432"
    );

    $result = $conn->query("SELECT code, name FROM famosos");
    if ($result) {
        while($row = $result->fetch(PDO::FETCH_OBJ)) {
            echo $row->code . " - " . $row->name . PHP_EOL;
        }
    }
    $conn = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}