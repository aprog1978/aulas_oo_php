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
        require_once './lutador.php';
        require_once './luta.php';
        $l = array();
        // nome, local, idade, altura, peso, vitorias, derotas, empates
        $l[0] = new lutador('Pretty boy', 'França', 30, 1.75, 68.9, 11, 2, 1);
        $l[1] = new lutador('Putscript', "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $l[2] = new lutador('SnapShadow', 'EUA', 35, 1.65, 80.9, 12, 2, 1);
        $l[3] = new lutador('Dead Code', 'Autralia', 28, 1.93, 81.6, 13, 0, 2);
        $l[4]=new lutador('UFOCobol', 'Brasil', 37, 1.70, 119.3, 5, 4, 3);
        $l[5]= new lutador('Nerdart', "EUA", 30, 1.81, 105.7, 12, 2, 4);
        
        /*$l[3]->apresentar();
        $l[3]->status();
        
        $l[3]->perderLuta();
        
        $l[3]->apresentar();
        $l[3]->status();
        
        $l[0]->apresentar();
        //$l[0]->status();
        
        $l[1]->apresentar();
        //$l[1]->status();
        
        $l[2]->apresentar();
        //$l[2]->status();
        
        $l[3]->apresentar();
        //$l[3]->status();
        
        $l[4]->apresentar();
        //$l[4]->status();
        
        $l[5]->apresentar();
        $l[5]->status();*/
        
        $lut1 = $l[4];
        $lut2 = $l[5];
        
        $UEC01 = new luta();
        $UEC01->marcarLuta($lut1,$lut2);
        $UEC01->lutar();
        
        $lut1->status();
        $lut2->status();
        
        ?>
        </pre>
    </body>
</html>
