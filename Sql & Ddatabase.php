<?php
  $host = "localhost";
  $username = "user";
  $password = "pass";
  $db = "db name";

  # connect to the database
  $conn = new mysqli($host, $username, $password, $db);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }


  $sql = "SELECT * FROM users";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {

   echo "OK";
   
  } else {
      echo "0 results";
  }

  $conn->close();
 
?>