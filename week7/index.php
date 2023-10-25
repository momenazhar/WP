<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <br>
    <?php
        include "connect.php";

        $query = "SELECT * FROM `student`;";
        $result = mysqli_query($conn, $query);
        ?>
        <div class="container">
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
                        echo "<tr>".
                            "<td>".$row['id']."</td>".
                            "<td>".$row['name']."</td>".
                            "<td>".$row['email']."</td>".
                            "<td>".$row['gender']."</td>".
                            "<td>".$row['dob']."</td>"
                        ."</tr>";
                    }
                } else {
                    echo "No records";
                }
                ?>
            </table>
        </div>
        <div class="container">
            <form action="insert.php" method="post">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control nameInput" placeholder="Insert Name">
                <br>
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control emailInput" placeholder="Insert Email">
                <br>
                <label for="gender">Gender</label>
                <select name="gender" class="form-control genderInput">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <br>
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" class="form-control dateInput">
                <br>
                <button class="btn btn-primary submission" type="submit">Insert Data</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>