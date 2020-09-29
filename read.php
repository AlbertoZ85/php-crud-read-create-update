<?php
include __DIR__ . '/partials/templates/head.php';
include __DIR__ . '/partials/read/server.php';
?>

<body>
    <div class="container">
        <a href="index.php">Torna alle stanze</a>

        <ul class="list-group">
            <li class="list-group-item">ID: <?=$row['id'];?></li>
            <li class="list-group-item">Numero stanza: <?=$row['room_number'];?></li>
            <li class="list-group-item">Piano: <?=$row['floor'];?></li>
            <li class="list-group-item">Numero letti: <?=$row['beds'];?></li>
        </ul>
    </div>
</body>
</html>