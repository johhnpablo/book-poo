<?php

$conn = pg_connect("host=localhost dbname=livro user=postgres password=1234");

$query = "SELECT code, name FROM famosos";

$result = pg_query($conn, $query);

if ($result) {
    while ($row = pg_fetch_assoc($result)) {
        echo $row['code'] . " " . $row['name'] . "\n";
    }
}

pg_close($conn);