<?php include __DIR__ .'/server.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <header>
      <h2>NEDDU HOTEL</h2>
    </header>


    <main>
      <?php if (isset($_GET['upstanza'])) { ?>
        <p><?php echo 'stanza ' . $_GET['upstanza'] .' aggiornata con successo' ?></p>
      <?php } ?>

      <?php if (isset($_GET['dlstanza'])) { ?>
        <p><?php echo 'stanza ' . $_GET['dlstanza'] .' cancellata con successo' ?></p>
      <?php } ?>

      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>numero stanza</th>
            <th>piano</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($stanze as $stanza) { ?>
            <tr>
              <td><?php echo $stanza['id']; ?></td>
              <td><?php echo $stanza['room_number']; ?></td>
              <td><?php echo $stanza['floor']; ?></td>
              <td><a href="<?php echo $base_path . 'show/show.php?id=' .  $stanza['id']; ?>"> vedi</a> </td>
              <td><a href="<?php echo $base_path . 'upgrade/edit.php?id=' .  $stanza['id']; ?>"> modifica</a> </td>
              <td><a href="<?php echo $base_path . 'delete/cancella.php?id=' .  $stanza['id']; ?>"> cancella</a> </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </main>

  </body>
</html>
