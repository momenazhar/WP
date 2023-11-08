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
        $row = mysqli_fetch_assoc($result)
        ?>
        <div class="container">
            <h1>Confirm Deleting <strong><?php echo $row['name'] ?></strong>!</h1>
            <br>
            <form action="delete.php" method="GET">
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
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $gender = $row['gender'];
                        $dob = $row['dob'];
                        echo "<tr>".
                            "<td><input type='hidden' name='idDel' value='$id' class='form-control'>$id</td>".
                            "<td><input type='hidden' name='nameDel' value='$name' class='form-control'>$name</td>".
                            "<td><input type='hidden' name='emailDel' value='$email' class='form-control'>$email</td>".
                            "<td><input type='hidden' name='genderDel' value='$gender'>$gender</td>".
                            "<td><input type='hidden' name='dobDel' value='$dob' class='form-control'>$dob</td>".
                        "</tr>";
                    } else {
                        echo "No records";
                    }
                    ?>
                </table>
                <hr>
                <button type="submit" class="btn btn-danger" style="display: flex; justify-content: center; align-items: center; padding: 6px 12px; gap: 4px"><svg xmlns="http://www.w3.org/2000/svg" fill="white" height="20" viewBox="0 -960 960 960" width="20"><path d='M277.37-111.869q-37.783 0-64.392-26.609-26.609-26.609-26.609-64.392v-514.5q-19.152 0-32.326-13.173-13.174-13.174-13.174-32.327 0-19.152 13.174-32.326t32.326-13.174H354.5q0-19.152 13.174-32.326T400-853.87h159.522q19.152 0 32.326 13.174t13.174 32.326h168.609q19.152 0 32.326 13.174t13.174 32.326q0 19.153-13.174 32.327-13.174 13.173-32.326 13.173v514.5q0 37.783-26.609 64.392-26.609 26.609-64.392 26.609H277.37Zm78.326-168.37h85.5v-360h-85.5v360Zm163.108 0h85.5v-360h-85.5v360Z'/></svg>Delete Records</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>