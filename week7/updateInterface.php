<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="query.js"></script>
</head>
<body>
    <br>
    <?php
        include "connect.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM `student` WHERE `id` = $id;";
        $result = mysqli_query($conn, $query);
        ?>
        <div class="container">
            <form action="update.php" method="GET">
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                    </tr>
                    <?php
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $gender = $row['gender'];
                            $dob = $row['dob'];
                            echo "<tr>".
                                "<td><input type='text' disabled type='text' name='idEdit' value='$id' class='form-control'></td>".
                                "<td><input type='text' name='nameEdit' value='$name' class='form-control'></td>".
                                "<td><input type='text' name='emailEdit' value='$email' class='form-control'></td>".
                                "<td><select name='genderEdit' class='form-control'><option value='male'>Male</option><option value='female'>Feale</option></select></td>".
                                "<td><input type='text' name='dobEdit' value='$dob' class='form-control'></td>".
                            "</tr>";
                        }
                    } else {
                        echo "No records";
                    }
                    ?>
                </table>
                <button type="submit" class="btn btn-primary">Submit Edits</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>