<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicios</title>
    <style>
        p {
            height: 25px;
        }
    </style>
</head>
<body>
    <pre>
        <?php
            $n1 = 2;
            $n2 = 3;

            echo "<h1>vc é trouxa</h1>";

            //ex1
            function soma($n1,$n2) {
                $soma = $n1 + $n2;
                return $soma;        
            }

            //ex2
            function areaTriangulo($baseT, $alturaT) {
                $areaT = ($baseT * $alturaT) / 2;
            }

            //ex3
            $array = array(1, 2, 3, 4, 5, 7, 8, 9, 10);
            function arrayU($array) {
                return end($array);
            }
            //echo arrayU($array);

            //ex4    
            function check($n1){
                $A = array(1,2,3,4,5,6,7,8,9,10);
                return in_array($n1,$A, true);
            }
            //echo check($n1);

            //ex5
            $fazenda = array(
                "galinha" => 2,
                "vaca" => 4,
                "porco" => 4,
            );
            function numPernas($fazenda) {
                $n1 = $fazenda["galinha"] + $fazenda["vaca"] + $fazenda["porco"];
                return $n1;
            }
            //echo numPernas($fazenda);

            //ex6
            function menorN($n1, $n2){
            return min($n1, $n2);
            }
            //echo menorN(4,7);

            //ex7
            function acharmMenorN($array) {
                return min($array);
            }
            //echo acharmMenorN($array);

            //ex8
            function faltaN($A, $n) {
                for ($i = 0; $i < $n; $i++)
            if ($A[$i] != ($i + 1))
                return ($i + 1);

            return $n + 1;
                }
            $A = [1, 2, 3, 4, 5, 6 , 7, 8, 9, 10];
            $n = sizeof($A);
            //echo faltaN($A, $n);
            
            //ex9
            function eNatal(){
                $hoje = date('d/m');
                //$hoje = "25/12";
                if ($hoje == "25/12") {
                    return true;
                } else {
                    return false;
                }
            }
            echo eNatal();
            
            //ex10
            function validaEmail($email) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    return "<h1>O email é valido</h1>";
                } else {
                    return "<h1>o email é invalido</h1>";
                }
            }
            $email = "receba@gmail.com";
            echo validaEmail($email);
            
        ?>
    </pre>
</body>
</html>