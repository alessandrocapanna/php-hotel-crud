<?php
  include __DIR__ .'/../database.php';

  // leggo id nella query
  $room_id = $_GET['id'];
  $sql = "SELECT * FROM `stanze` WHERE `id`= $room_id ";
  $result = $conn->query($sql);


  if ($result && $result->num_rows > 0) {
    $stanza = $result->fetch_assoc();
  } elseif ($result) {
    //  ci sono 0 risultati ma funziona la query
    $stanza = [];
  } else {
   // non funge query
   die('query error');
  }

  $conn->close();
?>
