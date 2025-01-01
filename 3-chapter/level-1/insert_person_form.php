<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastrar Pessoa</title>
        <link rel="stylesheet" href="css/form.css" type="text/css" media="screen">
    </head>
    <body>
        <form enctype="multipart/form-data" method="post" action="insert_save_person.php">
            <label>Código</label>
            <input name="id" readonly="1" type="text" style="width: 30%">

            <label>Nome</label>
            <input name="name" type="text" style="width: 50%">

            <label>Telefone</label>
            <input name="phone" type="text" style="width: 25%">

            <label>Email</label>
            <input name="email" type="email" style="width: 25%">

            <br>
            <h4 style="display: inline-block">Endereço</h4>
            <br>
            <label>Rua</label>
            <input name="stret" type="text" style="width: 50%">

            <label>Bairro</label>
            <input name="district" type="text" style="width: 25%">

            <label>Cidade</label>
            <select name="city_id" style="width: 25%">
            <?php 
                require_once 'list_cities.php';
                print list_cities();
            ?>
            </ select>
        </form>
        <button type="submit">
            Salvar
        </button>
    </body>
</html>