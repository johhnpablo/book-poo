<?php

$data = $_POST;
$conn = mysqli_connect(
    '127.0.0.1',
    'root',
    'password',
    'app_poo',
    3306
);

$result = mysqli_query($conn, "SELECT max (id) as next FROM person");
$next = (int) mysqli_fetch_assoc($result)['next']+1;

$sql = "INSERT INTO 
    person (id, name, stret, district, phone, email, city_id)
    VALUES(
           '{$next}',
           '{$data['name']}',
           '{$data['stret']}',
           '{$data['district']}'
           '{$data['phone']}'
           '{$data['email']}'
           '{$data['city_id']}'
    )
";

$result = mysqli_query($conn, $sql);

if ($result){
    print 'Registro inserido com sucesso!';
    mysqli_close($conn);
    return;
};

print mysqli_error($conn);
mysqli_close($conn);

