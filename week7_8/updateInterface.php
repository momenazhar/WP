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
            <h1>Updating <strong><?php echo $row['name']?></strong></h1>
            <br>
            <form action="update.php" method="GET">
                <table class="table table-hover table-bordered">
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
                            "<td><input type='text' readonly type='text' name='idEdit' value='$id' class='form-control'></td>".
                            "<td><input type='text' name='nameEdit' value='$name' class='form-control'></td>".
                            "<td><input type='text' name='emailEdit' value='$email' class='form-control'></td>".
                            "<td><select name='genderEdit' class='form-control' value='$gender'><option value='male'>Male</option><option value='female'>Female</option></select></td>".
                            "<td><input type='date' name='dobEdit' value='$dob' class='form-control'></td>".
                        "</tr>";
                    } else {
                        echo "No records";
                    }
                    ?>
                </table>
                <hr>
                <button type="submit" class="btn btn-primary" style="display: flex; justify-content: center; align-items: center; padding: 6px 12px; gap: 4px"><svg xmlns="http://www.w3.org/2000/svg" fill="white" height="20" viewBox="0 -960 960 960" width="20"><path d="m382-388 321-321q19-19 45-19t45 19q19 19 19 45t-19 45L427-253q-19 19-45 19t-45-19L167-423q-19-19-19-45t19-45q19-19 45-19t45 19l125 125Z"/></svg>Submit Edits</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>