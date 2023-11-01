<?php
    include "connect.php";

    $id = $_GET['id'];

    $query = "DELETE FROM `student` WHERE `id` = $id;";

    if ($conn->query($query) === TRUE) {
        echo "Deleted row with ID $id successfully";
      } else {
        echo "Error: " . $query . "<br>" . $conn->error;
      }

      header("Location: index.php");
?>