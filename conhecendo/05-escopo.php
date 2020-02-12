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
        // escopo - até onde uma varivael pode chegar.
        $name = "Wallisson";
        
            function test() {
                global $name; // recebe o valor do escopo global
                echo $name;
            }
            
            function test2() {
                //echo $name; // Váriavel não foi definida na função
            }
            
            test();
            //test2();
        ?>
    </body>
</html>
