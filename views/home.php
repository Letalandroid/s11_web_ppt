<?php

require_once __DIR__ . '/../controllers/amigo.controller.php';


$amigos = getAll();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/home.css">
    <link rel="shortcut icon" href="https://em-content.zobj.net/thumbs/160/whatsapp/273/people-hugging_1fac2.png" type="image/png">
    <title>Amigos xd</title>
</head>

<body>
    <?php require_once 'views/header.php'; ?>
    <form action="/controllers/add.php" method="post">
        <input type="text" placeholder="Paterno" name="paterno">
        <input type="text" placeholder="Materno" name="materno">
        <input type="text" placeholder="Nombre" name="nombre">
        <input type="submit" value="Añadir uwu">
    </form>

    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Paterno</td>
                <td>Materno</td>
                <td>Nombre</td>
            </tr>
        </thead>
        <tbody>
        <?php require_once 'amigo/amigo_list.php'; ?>
        </tbody>
    </table>

    <?php require_once 'views/footer.php'; ?>
</body>

</html>