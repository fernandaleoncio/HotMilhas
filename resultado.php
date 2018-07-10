<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    //os valores digitados são coletados
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    //o valor de delta é encontrado
    $delta = ($b*$b) -((4 * $a) * $c);

    //calculando o valor das raízes
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);

    //verificar se o delta é negativo
    if ($x1 >= 0 and $x2 >=0){
    echo "O valor de x1 = ".$x1." e o valor de x2 =".$x2;
    }else{
        echo "O valor de delta é negativo =".$delta;
    }
    ?>
</body>
</html>