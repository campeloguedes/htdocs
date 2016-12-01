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
        echo "Na função date() , experimente mudar o Y para y . O que acontece? <br/>";
        echo "<br/>";
        echo "Hoje é dia " . date('d/m/Y');
        echo "<br>";
        echo "Hoje é dia " . date('d/m/y');
        //echo " agora são " . date('H:i:s');
       
        
        echo "<br/><hr>Você consegue exibir a hora no formato de 12 horas, A.M. e
P.M.? <br/>";
        echo " agora são Formato AM " . date('H:i:s A');echo "<br/>";
        echo " agora são Formato 24h " . date('H:i:s G');
        echo "<br/>";
        
        echo "<br/><hr>E se você tivesse que exibir o dia da semana em formato
numérico, como 1 para segunda, 2 para terça etc.? Como
faria? <br/>";
        
        echo "Numero da Semana: ".date("w");
        
        echo "<br/>";
        
        echo "<br/><hr>Exiba quantos dias faltam para o próximo sábado. Por
exemplo, se hoje for quarta, então faltam 3 dias para sábado. <br/>";
        
        echo "Faltam: ".(6-date("w"))." Dias para Sábado <br/>";
        
        
        echo "<br/><hr>Exiba também o nome do mês atual.<br/>";
        
        echo "Mês: ".date("m");
        
        
        
        
        
        
        ?>
    </body>
</html>
