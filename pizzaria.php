<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pizzaria.css">
    <title>O roubo da pizzaria del gatito!</title>
</head>
<body>
    <div class="legal"></div>
    <main>
    <?php
    $nome = $_GET["nome"];
    $pizza = $_GET["pizza"];

    if($pizza >= 150){
        echo ("<h2> puts...</h2>");
        echo ("$nome foi pego roubando mais pizzas do que deveria.<br>Você está preso!");
    }
    elseif($pizza > 1 && $pizza <= 149) {
        echo ("<h2>Parabéns $nome!</h2> <br>");
        echo ("Você roubou a pizzaria com sucesso!");
    }
    elseif ($pizza == 1) {
        echo ("<h2>Você foi pego pelo Gatito!</h2><br>");
        echo ("Mas seu roubo foi tão miserável<br> que o Gatito pensou que você estava passando necessidade.<br>Parabéns $nome, seu roubo foi um sucesso!");
    }
    ?>
    <br><br>
    <button onclick="javascript:history.go(-1)">voltar</button>
    </main>
</body>
</html>