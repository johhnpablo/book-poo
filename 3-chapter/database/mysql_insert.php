<?php

$conn = mysqli_connect(
    '127.0.0.1',
    'root',
    'password',
    'livro',
    3306
);

mysqli_query($conn, "INSERT INTO famosos (code, name) VALUES (1, 'Joao Almeida')");
mysqli_query($conn, "INSERT INTO famosos (code, name) VALUES (2, 'Cristiana Silva')");
mysqli_query($conn, "INSERT INTO famosos (code, name) VALUES (3, 'Yahwaeh')");
mysqli_query($conn, "INSERT INTO famosos (code, name) VALUES (4, 'Yeshua Hamashiah')");
mysqli_query($conn, "INSERT INTO famosos (code, name) VALUES (5, 'Jeova Jireh')");
mysqli_query($conn, "INSERT INTO famosos (code, name) VALUES (6, 'David')");
mysqli_query($conn, "INSERT INTO famosos (code, name) VALUES (7, 'Josias')");

mysqli_close($conn);

