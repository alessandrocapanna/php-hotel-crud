<?php
include __DIR__ .'/../database.php';
$room_number = $_POST['room_number'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];
$id = $_POST['id'];

$sql = "UPDATE `stanze` SET `room_number` = $room_number, `floor` = $floor,`beds` = $beds, `updated_at` = NOW() WHERE $id = `id`";
$result = $conn->query($sql);

if ($result) {
  header('Location:' .  $base_path . '?upstanza=' . $room_number);
}else {
  die('non è avvetuta con successo');
}

$conn->close();
?>
