<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <?php
        $Fibonacci = array(
            0,
            1,
        );

        for ($i = 0; $i < 8; $i++) {
            $Fibonacci[$i + 2] = $Fibonacci[$i] + $Fibonacci[$i + 1];
            echo "$Fibonacci[$i] <br>";
        }
    ?>
</body>
</html>