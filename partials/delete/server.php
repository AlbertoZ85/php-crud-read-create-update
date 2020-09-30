<?php
include __DIR__ . '/../db.php';

if (empty($_POST['id'])) {
    die('Nessun id selezionato');
}

$id = $_POST['id'];

$sql = "DELETE FROM stanze WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();

if ($stmt && $stmt->affected_rows > 0) {
    header("Location: $basepath/index.php?id=$id");
} else {
    echo "Nessuna cancellazione";
}

$conn->close();