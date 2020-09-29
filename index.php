<?php
include __DIR__ . '/partials/templates/head.php';
include __DIR__ . '/partials/home/server.php';
?>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Room number</th>
                    <th>Floor</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $room) {?>
                <tr>
                    <td><?=$room['id'];?></td>
                    <td><?=$room['room_number'];?></td>
                    <td><?=$room['floor'];?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>