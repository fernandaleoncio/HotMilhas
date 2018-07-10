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
    $usuario =  $_SERVER['USER'];;
    $pergunta = $_POST['pergunta'];
    $resposta1 = $_POST['resposta1'];
    $resposta2 = $_POST['resposta2'];

echo $usuario;
echo $pergunta;
echo $resposta1;
echo $resposta2;


    ?>
</body>
</html>