<?php

require_once __DIR__ . '/../../controllers/amigo.controller.php';

$amigo = search_id($_GET['id'])[0];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - <?= $amigo['id'] ?></title>
</head>
<body>
    <form action="/controllers/edit.php" method="post">
        <input hidden type="text" name="id" value="<?= $amigo['id']; ?>">
        <input type="text" name="nombre" value="<?= $amigo['nombre']; ?>">
        <input type="text" name="paterno" value="<?= $amigo['paterno']; ?>">
        <input type="text" name="materno" value="<?= $amigo['materno']; ?>">
        <input type="submit" value="Editar">
    </form>
</body>
</html>