<?php

$conn = mysqli_connect(
    '127.0.0.1',
    'root',
    'password',
    'livro',
    3306
);

$query = "SELECT code, name FROM famosos";

$result = mysqli_query($conn, $query);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['code']." - ".$row['name']."\n";
    }
}

mysqli_close($conn);