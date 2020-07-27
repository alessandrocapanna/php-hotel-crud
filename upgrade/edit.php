<?php
include __DIR__ .'/../partials/header.php';
include __DIR__ .'/server.php';
?>


<main>
  <h2>Modifica i dati</h2>
  <form action="<?php echo $base_path . 'upgrade/modifica.php'; ?>" method="post">
    <div>
      <input type="hidden" name="id" value="<?php echo $stanza['id']; ?>">
    </div>

    <div>
      <label for="">Modifica il numero di stanza</label>
      <input type="text" name="room_number" value="<?php echo $stanza['room_number']; ?>">
    </div>

    <div>
      <label for="">Modifica il piano</label>
      <input type="text" name="floor" value="<?php echo $stanza['floor']; ?>">
    </div>

    <div>
      <label for="">Modifica i letti</label>
      <input type="text" name="beds" value="<?php echo $stanza['beds']; ?>">
    </div>

    <div>
      <input type="submit" value="modifica">
    </div>
  </form>



</main>
