<?php
include __DIR__ . '/../db.php';

if (empty($_GET['id'])) {
    die('Nessun id selezionato');
}

$id = $_GET['id'];

$sql = "SELECT id, room_number, floor, beds FROM stanze WHERE id = $id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
} elseif ($result) {
    echo "No results";
} else {
    echo "Query error";
}

$conn->close();