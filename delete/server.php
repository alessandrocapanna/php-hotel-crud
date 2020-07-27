<?php
  include __DIR__ .'/../database.php';

  // leggo id nella query
  $room_id = $_GET['id'];
  $sql = "DELETE  FROM `stanze` WHERE `id`= $room_id ";
  $result = $conn->query($sql);

  if ($result) {
    header('Location:' .  $base_path . '?dlstanza=' . $room_id);
  }else {
    die('non è avvetuta con successo');
  }

  $conn->close();
?>
