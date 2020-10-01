<?php
include __DIR__ . '/../db.php';
include __DIR__ . '/../functions.php';

if (empty($_POST['id'])) {
    die('Nessun id selezionato');
}

$id = $_POST['id'];

deleteId($conn, 'stanze', $id, $basepath);