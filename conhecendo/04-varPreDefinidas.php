<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //$_GET[""] - Recebe um valor do usuario do navegador
            //O valor padrao é string usar um conversor para forçar a mudança
            $name = (int)$_GET["a"]; // $_POST
            //var_dump($name);
            
            $ip = $_SERVER["REMOTE_ADDR"]; //pesquisar outras funcoes
            var_dump($ip);
            //há outras variaveis super globais
        ?>
    </body>
</html>
