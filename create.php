<?php
include __DIR__ . '/partials/templates/head.html';
?>

<div class="container p-4">
    <form action="partials/create/server.php" method="post">
        <div class="form-group">
            <label for="room-number">Numero della stanza</label>
            <input type="number" class="form-control" id="room-number" name="room-number" placeholder="Inserisci il numero della stanza">
        </div>
        <div class="form-group">
            <label for="floor">Piano</label>
            <input type="number" class="form-control" id="floor" name="floor" placeholder="Inserisci il numero del piano">
        </div>
        <div class="form-group">
            <label for="beds">Numero di letti</label>
            <input type="number" class="form-control" id="beds" name="beds" placeholder="Inserisci il numero di letti">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control bg-warning" value="Inserisci">
        </div>
    </form>
</div>

<?php include __DIR__ . '/partials/templates/footer.html';?>