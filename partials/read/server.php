<?php
include __DIR__ . '/../db.php';
include __DIR__ . '/../functions.php';

if (empty($_GET['id'])) {
    die('Nessun id selezionato');
}

$id = $_GET['id'];

$row = getId($conn, 'stanze', $id);
