<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>caneta</title>
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        ?>
    </head>
    <body>
        
        <?php
        
        // put your code here
        require_once 'Caneta.php';
        $c1 = new Caneta();
        
        $c1 -> modelo = 'Bic Cristal';
        $c1 -> cor = 'Azul';
        //$c1 -> ponta = 0.5;
        //$c1 -> carga = 99;
        //$c1 -> tampada = true;
        
        //print_r($c1);
        var_dump($c1);
        echo '<br />';
        
        $c1->rabiscar();
        var_dump($c1);
        echo '<br />';
        
        $c1->tampar();
        
        var_dump($c1);
        echo '<br />';
        ?>
        
    </body>
</html>
