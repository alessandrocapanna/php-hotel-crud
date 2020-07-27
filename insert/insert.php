<?php include __DIR__ .'/../partials/header.php'; ?>
<main>
  <h2>inserisci i dati</h2>
  <form action="<?php echo $base_path . 'insert.php'; ?>" method="post">


    <div>
      <label for="">inserisci il numero di stanza</label>
      <input type="text" name="room_number" value="<?php echo $stanza['room_number']; ?>">
    </div>

    <div>
      <label for="">inserisci il piano</label>
      <input type="text" name="floor" value="<?php echo $stanza['floor']; ?>">
    </div>

    <div>
      <label for="">inserisci i letti</label>
      <input type="text" name="beds" value="<?php echo $stanza['beds']; ?>">
    </div>

    <div>
      <input type="submit" value="aggiungi">
    </div>
  </form>

</main>
<?php
include __DIR__ .'/server.php';
?>
