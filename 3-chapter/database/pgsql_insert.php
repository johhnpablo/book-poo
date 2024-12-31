<?php

$conn = pg_connect("host=localhost dbname=livro user=postgres password=1234");

//Insert some records

pg_query($conn, "INSERT INTO famosos (code, name) VALUES (1, 'John')");
pg_query($conn, "INSERT INTO famosos (code, name) VALUES (2, 'Mary')");
pg_query($conn, "INSERT INTO famosos (code, name) VALUES (3, 'Jane Smith')");
pg_query($conn, "INSERT INTO famosos (code, name) VALUES (4, 'Juan Pablo')");
pg_query($conn, "INSERT INTO famosos (code, name) VALUES (5, 'Yeniffer')");
pg_query($conn, "INSERT INTO famosos (code, name) VALUES (6, 'Garald')");
pg_query($conn, "INSERT INTO famosos (code, name) VALUES (7, 'Bardo')");

// close connection

pg_close($conn);
