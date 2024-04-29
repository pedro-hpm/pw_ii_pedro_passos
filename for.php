<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
    $n1 = 0;
    $n2 = 1;

    for($i = 0; $i < 8; $i++) {

        echo "<p style='text-align:center'>$n1</p>";
        echo "$n2";

        $n2 = $n1 + $n2;
        $n1 = $n1 - $n2;
    }

?>
</body>
</html>