<?php
include __DIR__ . '/../db.php';

if (empty($_POST['id'])) {
    die('Nessun id selezionato');
}

$id = $_POST['id'];

$sql = "DELETE FROM stanze WHERE id = $id";
$result = $conn->query($sql);

if ($result) {
    // echo "Cancellata";
    header("location: ../../index.php");
} else {
    echo "Errore";
}

$conn->close();