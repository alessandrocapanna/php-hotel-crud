<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "db-hotel-crud";
  // Connect
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn && $conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

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
