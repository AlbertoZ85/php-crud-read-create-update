<?php
include __DIR__ . '/../db.php';

$sql = "UPDATE stanze SET room_number = ?, floor = ?, beds = ?, updated_at = NOW() WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('iiii', $room_number, $floor, $beds, $id);

$room_number = $_POST['room-number'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];
$id = $_POST['id'];

$stmt->execute();

if ($stmt && $stmt->affected_rows > 0) {
    header("Location: $basepath/read.php?id=$id");
} elseif ($stmt && $stmt->affected_rows == 0) {
    die('Non hai modificato alcun dato');
} else {
    die('Errore, hai provato a inserire un dato non valido');
}

$stmt->close();
$conn->close();