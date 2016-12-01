<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste BarCode39</title>
        
    </head>
    <body>
        
        <?php
        
        include './Barcode39.php';
        
        
        $bc = new Barcode39("00001");
        
        //$bc = new Barcode39("123-ABC"); 

        // set text size 
        $bc->barcode_text_size = 5; 

        // set barcode bar thickness (thick bars) 
        $bc->barcode_bar_thick = 4; 

        // set barcode bar thickness (thin bars) 
        $bc->barcode_bar_thin = 2; 

        // save barcode GIF file 
        $bc->draw("barcode.gif");
        //phpinfo();
        
        ?>
        <img src="../TesteBarcode39/barcode.gif" alt="barcode"/>
        
    </body>
</html>
