<?php
  include __DIR__ .'/../database.php';

  $room_number = $_POST['room_number'];
  $floor = $_POST['floor'];
  $beds = $_POST['beds'];

  // leggo id nella query

  $sql = "INSERT INTO `stanze` (`room_number`, `floor`, `beds`) VALUES ($room_number, $floor, $beds);";
  $result = $conn->query($sql);
  $room_id = $_GET['id'];
  if ($result) {
    header('Location:' .  $base_path . '?instanza=' . $room_id);
  }else {
    die('non è avvetuta con successo');
  }

  $conn->close();
?>
