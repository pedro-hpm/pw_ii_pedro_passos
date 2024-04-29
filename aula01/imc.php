<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio IMC</title>
</head>
<body>
    <?php
        $peso = 55;
        $altura = 1.75;
        $imc = $peso/$altura**2;
        $class;

        echo "Peso: ", $peso, " kg<br>";
        echo "Altura: ", $altura, " cm<br>";
        echo "IMC: ", $imc, "<br>";

        if ($imc < 18.5) {
            $class = "Abaixo do peso";
        } else if ($imc >= 18.5 && $imc <= 24.9) {
            $class = "Peso ideal";
        } else if ($imc >= 25 && $imc <= 29.9) {
            $class = "Acima do peso";
        } else if ($imc >= 30 && $imc <= 34.9) {
            $class = "Obesidade grau I";
        } else if ($imc >= 35 && $imc <= 39.9) {
            $class = "Obesidade grau II (severa)";
        } else if ($imc >= 40) {
            $class = "Obesidade III (mórbida)";
        }

        echo "Classificação: ", $class;
    ?>
</body>
</html>