<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicios condicionais / loops</title>
</head>
<body>
    <?php 
        $idade = 1238;
        $peso = 93;

        if($idade < 18 && $peso < 50){
            echo "risco médio";
        }elseif($idade < 18 && ($peso >= 50 && $peso <= 90)){
            echo "risco normal";
        }elseif($idade < 18 && ($peso > 90 && $peso <= 120)){
            echo "risco alto";
        }elseif($idade < 18 && $peso > 120){
            echo "risco obesidade morbida morte";
        }elseif($idade >= 18 && $peso <= 50){
            echo "risco medio";
        }elseif($idade >= 18 && ($peso > 50 && $peso <= 100)){
            echo "risco normal";
        }elseif($idade >= 18 && ($peso > 100 && $peso <= 140)){
            echo "risco alto";
        }elseif($idade >=18 && $peso > 140){
            echo "risco absurdamente alto obeso fudido";
        }
        
        

    ?>
    <br><br>
    <?php 
    $situacao = $idade >= 19 ? "Adulto" : "Adolescente";
    echo "O aluno é $situacao";
    ?>
    <br><br>
    <?php
    
    $pais_0 = "China";

    echo match ($pais_0) {
         "Brasil" => "O pais é bostil" ,
         "China" => "pastel de flango",
         "Corea" => "xin xun kin jon un",
         default => "opção invalida",
    };

    ?>
    <br><br>
    <?php 
    $nums = array(1,2,3,4,5,6,7,8,9,10);
    $media = 0;

    for($i = 0; $i < 10; $i++){
        $media += $nums[$i] / 10;
    }
    
    echo $media;
    
    ?>
</body>
</html>