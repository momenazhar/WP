<?php
    include "connect.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    $query = "INSERT INTO `student`(`name`, `email`, `gender`, `dob`) values ('$name', '$email', '$gender', '$dob')";

    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $query . "<br>" . $conn->error;
      }

      header("Location: index.php");
?>