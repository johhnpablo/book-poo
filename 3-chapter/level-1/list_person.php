<html>
    <head>
        <meta charset="UTF-8">
        <title>Listagem de pessoas</title>
        <link rel="stylesheet" href="css/list.css">
    </head>
    <body>
        <?php
            $conn = mysqli_connect(
                '127.0.0.1',
                'root',
                'password',
                'app_poo',
                3306
            );
            $result = mysqli_query($conn, "SELECT * FROM person ORDER BY id");
            print '<table border="1">';
        ?>
    </body>
</html>