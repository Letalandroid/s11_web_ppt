<?php

require_once __DIR__ . '/../model/amigo.php';

function getAll() {
    return Amigo::list();
}