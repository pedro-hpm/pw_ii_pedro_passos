<?php
    //ex1
    echo "ex1";
    echo "<br>hello world!<br>";
    echo "O primeiro programa a gent nunca esquece!";
    
    //ex2
    echo "<br><br>";
    echo "ex2";
    echo "<br>Pedro Henrique Passos Martins";
    echo "<br>Av Sapopemba,5199";
    echo "<br>03374-001 e 11 4002-8922";

    //ex3
    echo "<br><br>";
    echo "ex3";
    echo "<br>Desencana, facilita<br>
    Deixa eu viver em paz<br>
    Mete o pé da minha vida<br>
    Que você ficou pra trás<br>
    Desencana, facilita<br>
    Deixa eu viver em paz<br>
    Mete o pé da minha vida<br>
    Que você ficou pra trás";

    //ex4
    echo "<br><br>";
    echo "ex4";
    echo "<br>Eu te amo!<3";

    //ex5
    echo "<br><br>";
    echo "ex5";
    echo "<br>pulado temporariamente";

    //ex6
    echo "<br><br>";
    echo "ex6<br>";

    for( $i=0 ; $i<5 ; $i++ ){
        for( $j =0 ; $j<5 ; $j++){
            if( $i==0 || $i == 4){
                echo "X";
            }
            else{
                if ($j ==0 || $j ==4) {
                    echo "X";
                } else {
                    echo "&nbsp;&nbsp;&nbsp;";
                }
            }
        }
        echo "<br>";
    }

    //7
    echo "<br><br>";
    echo "ex6<br>";

    $alunos = array (
        "aline", 
        "mario",
        "sérgio",
        "shirley"
    );

    $notas = array (
        9.0,
        "DEZ",
        4.5,
        7.0
    );

    echo "<div class='painel' style='display:flex; gap:10px;'>";
    echo "<div class='alunos'> Alunos(a) <br>";
    echo "======== <br>";

    for($i=0; $i<4; $i++){
        echo $alunos[$i] . "<br>";
    };
    echo "</div><br>";

    echo "<div class='notas'> Notas <br>";
    echo "========= <br>";
    
    for($i=0; $i<4; $i++){
        echo $notas[$i] . "<br>";
    };



    //ex8
    echo "EX 08<br>";
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 4; $j++) {
            if ($i == 0 || $i == 2) {
                echo "P";
            } 
            else {
                if ($j == 0 || $j == 3 && $i != 3  && $i != 4) {
                    echo "P";
                } else {
                    echo "&nbsp;&nbsp;&nbsp;";
                }
            }
             
        }
        echo "<br>";
    }

    //ex9
    echo "<br><br>"
    echo "EX 09<br>Cadastro de Clientes<br>

    0 - Fim<br>
    
    1 - Inclui<br>
    
    2 - Altera<br>
    
    3 - Exclui<br>
    
    4 – Consulta<br>";

    echo "<br><br><br><br><br><br>";

    //ex10
    echo "EX 10<br>
    <div style='color: green;'>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;X<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XXX<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XXXXX<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XXXXXXX<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XXXXXXXXX<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XXXXXXXXXXX<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XXXXXXXXXXXXX<br>
    &nbsp;&nbsp;&nbsp;XXXXXXXXXXXXXXX<br>
    </div>
    <div style='color: brown;'>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XX<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XX<br>
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XXXX
    <br><br>";

?>