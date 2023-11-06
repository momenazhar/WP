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

        $query = "SELECT * FROM `student`;";
        $result = mysqli_query($conn, $query);
        ?>
        <div class="container">
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th class='align-middle'>ID</th>
                    <th class='align-middle'>Name</th>
                    <th class='align-middle'>Email</th>
                    <th class='align-middle'>Gender</th>
                    <th class='align-middle'>Date of Birth</th>
                </tr>
                    <?php
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            echo "<tr>".
                                "<td class='align-middle'>".$row['id']."</td>".
                                "<td class='align-middle'>".$row['name']."</td>".
                                "<td class='align-middle'>".$row['email']."</td>".
                                "<td class='align-middle'>".$row['gender']."</td>".
                                "<td class='align-middle'>".$row['dob']."</td>".
                                "<form action='deleteInterface.php' method='GET'>".
                                    "<td class='align-middle text-center' style='margin: 0 !important;'><button type='submit' name='id' value='$id' class='btn btn-danger'><i class='bi bi-trash-fill'/></button></td>".
                                "</form>".
                                "<form action='updateInterface.php' method='GET'>".
                                    "<td class='align-middle text-center' style='margin: 0 !important;'><button type='submit' name='id' value='$id' class='btn btn-primary'><i class='bi bi-pencil-square' /></button></td>".
                                "</form>".
                            "</tr>";
                        }
                    } else {
                        echo "No records";
                    }
                    ?>
            </table>
        </div>
        <div class="container">

        </div>


        <div class="container">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                Add New Records
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <form action="insert.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Insert Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Insert Data</button>
                </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>