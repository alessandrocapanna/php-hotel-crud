<?php include __DIR__ .'/database.php' ?>
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
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </main>

  </body>
</html>
