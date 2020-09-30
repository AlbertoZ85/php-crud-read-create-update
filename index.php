<?php
include __DIR__ . '/partials/templates/head.html';
include __DIR__ . '/partials/home/server.php';
?>

<div class="container">
    <?php if (!empty($_GET['id'])) {
    $deleted_id = $_GET['id'];?>
        <div class="alert alert-warning">
            <?php echo "Hai cancellato la stanza numero $deleted_id"; ?>
        </div>
    <?php }?>
    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr class="table-primary text-black-50">
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
                <td><a href="read.php?id=<?=$room['id'];?>" class="btn btn-info">VIEW</a></td>
                <td><a href="update.php?id=<?=$room['id'];?>" class="btn btn-warning">UPDATE</a></td>
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
</div> <!-- container close -->
<?php include __DIR__ . '/partials/templates/footer.html';?>
