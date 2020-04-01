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
        // put your code here
        require_once 'Caneta.php';
        $c1 = new Caneta();
        
        $c1-> cor = "azul";
        $c1-> ponta = 0.5;
        $c1 -> tampada = false;
        $c1->tampar();
        $c1 ->rabiscar();
        print_r($c1);
        
        $c1->destampar();
        $c1 ->rabiscar();
        print_r($c1);
        
        $c2 = new Caneta();
        $c2-> cor = "verde";
        $c2-> carga = 50;
        //$c2 -> tampada = false;
        $c2->tampar();
        $c2 ->rabiscar();
        print_r($c2);
        
        $c2->destampar();
        $c2 ->rabiscar();
        print_r($c2);
        
        
        
        
        
        ?>
    </body>
</html>
