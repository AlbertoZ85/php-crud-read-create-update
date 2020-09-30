<?php
include __DIR__ . '/partials/templates/head.html';
include __DIR__ . '/partials/update/server.php';
?>

<div class="container p-4">
    <form action="partials/update/server-edit.php" method="post">
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="<?=$row['id'];?>">
        </div>
        <div class="form-group">
            <label for="room-number">Numero della stanza</label>
            <input type="number" class="form-control" id="room-number" name="room-number" value="<?=$row['room_number'];?>">
        </div>
        <div class="form-group">
            <label for="floor">Piano</label>
            <input type="number" class="form-control" id="floor" name="floor" value="<?=$row['floor'];?>">
        </div>
        <div class="form-group">
            <label for="beds">Numero di letti</label>
            <input type="number" class="form-control" id="beds" name="beds" value="<?=$row['beds'];?>">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control bg-warning" value="Modifica">
        </div>
    </form>
</div>

<?php include __DIR__ . '/partials/templates/footer.html';?>