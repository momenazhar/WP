<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1 class="text-center">Indexed Array</h1>
    <div class="container-fluid outer justify-content-center">
        <?php
            $colors = array("White", "Black", "Red", "Green", "Blue", "Purple", "Pink", "Orange", "Yellow");

            for($x = 0; $x < count($colors); $x++) {
                echo "<div class='inner'>".$colors[$x]."</div>";
            }
        ?>
    </div>
    <hr>
    <h1 class="text-center">Associative Array</h1>
    <div class="container-fluid outer justify-content-center">
        <?php
            $age = array("Deo" => "35", "Marco" => "22", "Sarah" => "20", "Isa" => "21", "John" => "19");
            krsort($age);
            foreach($age as $x => $ageValue) {
                echo "<div class='inner'>".$x."<br>".$ageValue."</div>";
            }
        ?>
    </div>
    <div class="bt-container">
        <button class="btn btn-primary sort-ascending-associative">Sort Ascending</button>
    </div>
    <hr>
    <h1 class="text-center">Multidimensional Array</h1>
    <div class="container-fluid outer justify-content-center">
        <?php
            $cars = array(
                array("Kia", 22, 1200),
                array("Land Rover", 22, 1200),
                array("BMW", 22, 1200),
                array("Toyota", 22, 1200)
            );

            for($i = 0; $i < count($cars); $i++){
                echo "<div class='inner'>";
                for($j = 0; $j < count($cars) - 1; $j++) {
                    echo $cars[$i][$j]."<br>";
                }
                echo "</div>";
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>