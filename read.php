<?php
include __DIR__ . '/partials/templates/head.html';
include __DIR__ . '/partials/read/server.php';
?>

<body>
    <div class="container p-4">
        <h1>Dettagli della stanza</h1>

        <ul class="list-group">
            <li class="list-group-item">ID: <?=$row['id'];?></li>
            <li class="list-group-item">Numero stanza: <?=$row['room_number'];?></li>
            <li class="list-group-item">Piano: <?=$row['floor'];?></li>
            <li class="list-group-item">Numero letti: <?=$row['beds'];?></li>
        </ul>
    </div> <!-- container close -->
<?php include __DIR__ . '/partials/templates/footer.html';?>