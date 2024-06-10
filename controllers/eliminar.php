<?php

require_once __DIR__ . '/../model/amigo.php';

try {

    $id = $_GET['id'];

    Amigo::remove($id);
    header('Location: /');

} catch (PDOException $e) {
    die($e->getMessage());
}