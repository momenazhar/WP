<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1 class="text-center bold">PHP Requests</h1>
    <div class="container-fluid outer justify-content-center">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="form-input">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name">
            <br>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
        <hr>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = $_POST['first_name'];
                if(!$name) {
                    echo "<p>Name is <strong>empty</strong></p>";
                } else {
                    echo "<p>Name is <strong>".$name."</strong></p>";
                }
            }
        ?>
    </div>
    <hr>
    <div class="container-fluid outer justify-content-center">
        <a href="index.php?course=Web&week=6" class="btn btn-primary">Submit</a>
        <hr>
        <?php
            $course = $_GET['course'];
            $week = $_GET['week'];
            echo "<p>Course: <strong>".$course."</strong></p>";
            echo "<p>Week: <strong>".$week."</strong></p>";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>