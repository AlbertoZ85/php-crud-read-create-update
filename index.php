<?php
include __DIR__ . '/partials/templates/head.html';
include __DIR__ . '/partials/home/server.php';
?>

<body>
    <h1 class="text-center">Elenco stanze</h1>
    <div class="container">
        <table class="table table-dark table-striped table-bordered">
            <thead>
                <tr class="table-primary">
                    <th>ID</th>
                    <th>Numero stanza</th>
                    <th>Piano</th>
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
                    <td><a href="read.php?id=<?=$room['id'];?>">VIEW</a></td>
                    <td><a href="">UPDATE</a></td>
                    <td>
                        <form action="partials/delete/server.php" method="post">
                            <input type="submit" value="DELETE" class="btn btn-danger">
                            <input type="hidden" name="id" value="<?=$room['id'];?>">
                        </form>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>