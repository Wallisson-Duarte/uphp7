<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Tipos Basicos
            $name = 'Wallisson'; //String
            $year = 2000; // Inteiro
            $salary = 10000.99; // Ponto Flutuante (decimal)
            $blocked = false; // Booleano
        //Tipos Compostos
            //Vetores
            //$fruits = array("abacaxi", "laranja", "limao");
            
            echo $fruits[2];
            //Objeto
            //$currentYear = new DateTime();
            
            var_dump($currentYear);
        //Tipos Especiais
            //resource, operações com arquivos
            $file = fopen("02.tiposDados.php", "r");
            //var_dump($arquivo);
            //Valor Nulo == Ausencia de valor
            $null = NULL;
        ?>
    </body>
</html>
