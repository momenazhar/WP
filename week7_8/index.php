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
            <h1 class="text-center">Student Database</h1>
            <br>
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th class='text-center'>ID</th>
                    <th class='text-center'>Name</th>
                    <th class='text-center'>Email</th>
                    <th class='text-center'>Gender</th>
                    <th class='text-center'>Date of Birth</th>
                    <th class='text-center' colspan='2'>Action</th>
                </tr>
                    <?php
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            echo "<tr>".
                                "<td class='align-middle text-center' style='width: 42px;'>".$row['id']."</td>".
                                "<td class='align-middle'>".$row['name']."</td>".
                                "<td class='align-middle'>".$row['email']."</td>".
                                "<td class='align-middle'>".$row['gender']."</td>".
                                "<td class='align-middle'>".$row['dob']."</td>".
                                "<form action='updateInterface.php' method='GET'>".
                                    "<td class='align-middle text-center' style='margin: 0 !important; width: 38px;'><button type='submit' name='id' value='$id' class='btn btn-info' style='padding: 0 !important; height: 38px; width: 38px; display: flex; align-items: center; justify-content: center;'><svg xmlns='http://www.w3.org/2000/svg' fill='white' height='20' viewBox='0 -960 960 960' width='20'><path d='M206.783-100.782q-44.305 0-75.153-30.848-30.848-30.848-30.848-75.153v-546.434q0-44.305 30.848-75.153 30.848-30.848 75.153-30.848h356.435L457.216-753.217H206.783v546.434h546.434v-250.303l106.001-106.001v356.304q0 44.305-30.848 75.153-30.848 30.848-75.153 30.848H206.783ZM480-480Zm-129.044 76.043v-86.26q0-21.225 7.978-40.461 7.979-19.235 22.936-34.192l327.607-327.043q15.957-15.957 35.479-23.652 19.522-7.696 39.609-7.696 20.522 0 39.827 7.696 19.304 7.695 35.261 23.652l32.26 32.695q15.522 15.956 23.217 35.318 7.696 19.363 7.696 39.392 0 20.03-7.392 39.528-7.392 19.497-23.521 35.633L564.87-382.304q-14.957 14.956-34.192 23.152-19.236 8.196-40.461 8.196h-86.26q-22.087 0-37.544-15.457-15.457-15.457-15.457-37.544Zm482.696-380.608L785-832.652l48.652 48.087Zm-388 338.913h48.087l226.913-226.913-23.835-24.044-24.687-24.043-226.478 225.913v49.087Zm251.165-250.957-24.687-24.043 24.687 24.043 23.835 24.044-23.835-24.044Z'/></svg></button></td>".
                                "</form>".
                                "<form action='deleteInterface.php' method='GET'>".
                                    "<td class='align-middle text-center' style='margin: 0 !important; width: 38px;'><button type='submit' name='id' value='$id' class='btn btn-danger' style='padding: 0 !important; height: 38px; width: 38px; display: flex; align-items: center; justify-content: center;'><svg xmlns='http://www.w3.org/2000/svg' fill='white' height='20' viewBox='0 -960 960 960' width='20'><path d='M277.37-111.869q-37.783 0-64.392-26.609-26.609-26.609-26.609-64.392v-514.5q-19.152 0-32.326-13.173-13.174-13.174-13.174-32.327 0-19.152 13.174-32.326t32.326-13.174H354.5q0-19.152 13.174-32.326T400-853.87h159.522q19.152 0 32.326 13.174t13.174 32.326h168.609q19.152 0 32.326 13.174t13.174 32.326q0 19.153-13.174 32.327-13.174 13.173-32.326 13.173v514.5q0 37.783-26.609 64.392-26.609 26.609-64.392 26.609H277.37Zm78.326-168.37h85.5v-360h-85.5v360Zm163.108 0h85.5v-360h-85.5v360Z'/></svg></button></td>".
                                "</form>".
                            "</tr>";
                        }
                    } else {
                        echo "No records";
                    }
                    ?>
            </table>
            <h5>Showing <code style="background-color: #c9c9c9; border-radius: 3px; padding-inline: 2px; color: #383838; font-weight: 600;"><?php echo mysqli_num_rows($result); ?></code> Records</h5>
            <hr>
        </div>

        <div class="container">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal" style="display: flex; justify-content: center; align-items: center; padding: 6px 12px; gap: 4px">
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" height="20" viewBox="0 -960 960 960" width="20"><path d="M417-417H229q-26 0-44.5-18.5T166-480q0-26 18.5-44.5T229-543h188v-188q0-26 18.5-44.5T480-794q26 0 44.5 18.5T543-731v188h188q26 0 44.5 18.5T794-480q0 26-18.5 44.5T731-417H543v188q0 26-18.5 44.5T480-166q-26 0-44.5-18.5T417-229v-188Z"/></svg>Add New Records
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