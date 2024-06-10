<?php

require_once __DIR__ . '/../model/amigo.php';

try {

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];

    Amigo::edit($id, $nombre, $paterno, $materno);
    header('Location: /');

} catch (PDOException $e) {
    die($e->getMessage());
}