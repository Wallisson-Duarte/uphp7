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
            $name = "Wallisson";
            $lastName = "Duarte";
            //Concatenação.
            $fullName = $name. " ". $lastName; 
            echo "nome: $fullName<br/>";
            //unset - Limpa uma ou mais variaveis ($a, $b);
            //unset($name);
            //isset - verifica se uma ou mais variaveis existem
            if(isset($name)){
                echo "nome: $name<br/>";
            }    
        ?>
    </body>
</html>
