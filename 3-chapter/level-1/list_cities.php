<?php

function list_cities($id = null) {
    $output = '';
    $conn = mysqli_connect(
        '127.0.0.1',
        'root',
        'password',
        'app_poo',
        3306
    );

    $query = 'SELECT id, name FROM city';
    $result = mysqli_query($conn, $query);

    if ($result) {
        while($row = mysqli_fetch_assoc($result)) {
            $check = ($row['id'] == id) ? 'selected=1' : '';
            $output .= "<option $check value='{$row['id']}'>{$row['name']}</option>\n";
        }
    }
    mysqli_close($conn);
    return $output;
}