<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>
    <header>
        <h1> Resultado do processamento</h1>
    </header>
    <main>
        <?php
            //var_dump($_GET); //$-request > $_get, $_post, $_cookies // usar metódo escolhido
            $nome = $_REQUEST["nome"] ??"sem nome"; //variável super global
            $sobrenome = $_REQUEST["sobrenome"] ??"Desconhecido";
            echo"<p> É um prazer te conhecer,<strong> $n $s</strong>! Este é o meu site!";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>
