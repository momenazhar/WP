<?php
    include "connect.php";

    $id = $_GET['idEdit'];
    $name = $_GET['nameEdit'];
    $email = $_GET['emailEdit'];
    $gender = $_GET['genderEdit'];
    $dob = $_GET['dobEdit'];

    $query = "UPDATE `student` SET `name` = '$name', `email` = '$email', `gender` = '$gender', `dob` = '$dob' WHERE `id` = $id;";

    if ($conn->query($query) === TRUE) {
        echo "Updated row with ID $id successfully";
      } else {
        echo "Error: " . $query . "<br>" . $conn->error;
      }

      header("Location: index.php");
?>