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
            <?php foreach ($amigos as $amigo) { ?>
            <tr>
                <td><?= $amigo['id'] ?></td>
                <td><?= $amigo['paterno'] ?></td>
                <td><?= $amigo['materno'] ?></td>
                <td><?= $amigo['nombre'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php require_once 'views/footer.php'; ?>
</body>

</html>