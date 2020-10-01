<?php
// Fornisce tutti i dati di tutte le stanze (home)
function getAll($conn, $table) {
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $results = [];
        while ($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
    } elseif ($result) {
        $results = [];
    } else {
        $results = false;
    }

    $conn->close();
    return $results;
}

// Fornisce tutti i dati della stanza selezionata (read)
function getId($conn, $table, $id) {
    $sql = "SELECT * FROM $table WHERE id = $id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } elseif ($result) {
        $row = '';
    } else {
        $row = false;
    }

    $conn->close();
    return $row;
}

// Cancella la stanza selezionata
function deleteId($conn, $table, $id, $basepath) {
    $sql = "DELETE FROM $table WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    if ($stmt && $stmt->affected_rows > 0) {
        header("Location: $basepath/index.php?id=$id");
    } else {
        die('Nessuna cancellazione');
    }

    $stmt->close();
    $conn->close();
}