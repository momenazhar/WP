<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        * {
            font-size: 2rem;
        }
    </style>
    <?php
        $x = 8;
        $y = 36;

        echo $x > 5 && $y > 5 ? "true" : "false";
        echo "<br>";
        echo $z ?? "does not exist";
    ?>
</body>
</html>