<?php
include __DIR__ .'/../partials/header.php';
include __DIR__ .'/server.php';
?>
<main>
  <h2> stanza numero: <?php echo $stanza['id']; ?></h2>
  <ul>
    <li>id: <?php echo $stanza['id']; ?></li>
    <li>piano: <?php echo $stanza['floor']; ?></li>
    <li>letti: <?php echo $stanza['beds']; ?></li>
    <li>numero stanza: <?php echo $stanza['room_number']; ?></li>
    <li>data di creazione: <?php echo $stanza['updated_at']; ?></li>
  </ul>
</main>
