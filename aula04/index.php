<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>caneta4</title>
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        ?>
    </head>
    <body>
        <pre>
        <?php
        // put your code here
        
        require_once 'Caneta.php';
        
        $c1 = new Caneta("Bic","Azul",0.5);
        $c2 = new Caneta("Nic","Verde",0.7);
        //$c1->setModelo('Bic');
        //$c1->setPonta(0.5);
        print_r($c1);
        $c2->destampar();
        print_r($c2);
        
        //print "eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
        
        ?>
        </pre>
    </body>
</html>
