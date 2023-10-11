<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Indexed Array</h1>
    <div class="container-fluid outer">
        <?php
            $colors = array("White", "Black", "Red", "Green", "Blue", "Purple", "Pink", "Orange", "Yellow", "aaa", "aa");

            for($x = 0; $x < count($colors); $x++) {
                echo "<div class='inner'>".$colors[$x]."</div>";
            }
        ?>
    </div>
    <hr>
    <h1>Associative Array</h1>
    <div class="container-fluid outer">
        <?php
            $age = array("Deo" => "35", "Marco" => "22", "Sarah" => "20", "Isa" => "21", "John" => "19");

            foreach($age as $x => $ageValue) {
                echo "<div class='inner'> Key: ".$x."<br> Age: ".$ageValue."</div>";
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>