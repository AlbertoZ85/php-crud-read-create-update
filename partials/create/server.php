<?php
include __DIR__ . '/../db.php';

if (empty($_POST['room-number'] && $_POST['floor'] && $_POST['beds'])) {
    die('Non hai inserito tutti i dati');
}

$sql = "INSERT INTO stanze (room_number, floor, beds, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())";

$stmt = $conn->prepare($sql);
$stmt->bind_param('iii', $room_number, $floor, $beds);

$room_number = $_POST['room-number'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];

$stmt->execute();

if ($stmt && $stmt->affected_rows > 0) {
    header("Location: $basepath/read.php?id=$stmt->insert_id");
} elseif ($stmt) {
    die('Nessun inserimento');
} else {
    die('Errore');
}

$stmt->close();
$conn->close();