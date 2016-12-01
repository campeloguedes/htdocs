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
        require '../CriarPDF/MPDF57/mpdf.php';
        
        //define('MPDF_PATH', 'class/mpdf/');
        //include(MPDF_PATH.'mpdf.php');
//        $mpdf=new mPDF();
//        $mpdf->WriteHTML('Hello World');
//        $mpdf->Output();
//        exit();
        //Carregando a biblioteca mPDF
        //include('mpdf/mpdf.php');
        //Inicia o buffer, qualquer HTML que for sair agora sera capturado para o buffer
        ob_start();
        ?>
        A seguir você verá o seu relatório
        <?php
        //Fazendo o include de um HTML em outro arquivo, ficara retido no buffer
        include('conteudo.html');

        //Limpa o buffer jogando todo o HTML em uma variavel.
        $html = ob_get_clean();
        $mpdf=new mPDF();
        $mpdf->WriteHTML($html);
        //Colocando o rodape
        $mpdf->SetFooter('{DATE j/m/Y H:i}|Página {PAGENO} de {nb}|www.gqferreira.com.br');
        $mpdf->Output();
        exit;
        
        
        
        
        
        
        ?>
    </body>
</html>
