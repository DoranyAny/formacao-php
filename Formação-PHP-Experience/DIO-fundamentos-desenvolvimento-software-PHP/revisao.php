<html>

    <head>
    </head>

    <body>
            <?php
                $string = "Curso da Dio";
                $numeros = 50;
                $array = array("php", "java","css", "html");
                date_default_timezone_set('America/Sao_Paulo');
                $data = date("d/m/y  H:i:s");
            ?>
        <h4>
            Essa é uma variável do tipo string, para implementar uma variável do tipo string utilizamos aspas simples ('') ou duplas (""): <br>
            php
            $string = "Curso da Dio";
            echo $string;
                <?php
                echo $string;
                ?>
        </h4>

        <h4>
            Essa é uma variável do tipo números/integer para implementar essa variável utilizamos somente os números dessa forma: <br>
            $numeros = 50
                <?php
                    echo $numeros;
                ?>
        </h4>

        <h4>
            Essa é uma variável com array, para implementar um array e uma variável utilizamos desta forma:<br>
            $array = array("php", "java","css"); <br>
                <?php
                print_r($array)
                ?>
        </h4>

        <h4>
            Essa é uma variável do tipo datas, para implementar com datas utilizamos uma função pronta do php "date":<br>
            $data = date("d/m/y  H:i:s")<br>
                <?php
                print $data
                ?>
        </h4>

    </body>

</html>