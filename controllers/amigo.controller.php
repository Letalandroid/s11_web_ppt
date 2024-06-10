<?php

require_once __DIR__ . '/../model/amigo.php';

function getAll() {
    return Amigo::list();
}

function search_id($id)
{
    return Amigo::search_id($id);
}