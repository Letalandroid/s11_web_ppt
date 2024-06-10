<?php

require_once __DIR__ . '/../model/amigo.php';

try {

    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];

    Amigo::add($nombre, $paterno, $materno);
    header('Location: /');

} catch (PDOException $e) {
    die($e->getMessage());
}