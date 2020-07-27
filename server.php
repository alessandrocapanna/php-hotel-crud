<?php
  include 'database.php';
  $sql = "SELECT *  FROM `stanze`";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    $stanze =[];
    // ci sono risultati e la query funge
    while($row = $result->fetch_assoc()) {
      $stanze[] = $row;
    }

    // var_dump($stanze);
  } elseif ($result) {
    //  ci sono 0 risultati ma funziona la query
    $stanze =[];
  } else {
   // non funge query
   die('query error');
  }

  $conn->close();
?>
