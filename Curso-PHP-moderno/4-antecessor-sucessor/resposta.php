<DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Resposta</title>
    </head>
    <body>
        <main>
            <h1> Resultado Final </h1>
            <p>
               <?php
                $numero=$_REQUEST["num"]?? 0;
                $ant= $numero-1;
                $suc= $numero+1;
                echo "O número escolhido foi $numero \n";
                echo "O seu antecessor é $ant \n";
                echo "O seu sucessor é $suc";
               ?>
            </p>
            <button onclick="javascript:window.location.href='index.html"> Voltar </button>
        </main>
    </body>
    </html>