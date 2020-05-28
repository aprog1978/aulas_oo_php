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
        require_once './video.php';
        require_once './gafanhoto.php';
        // put your code here
        
        $v[0] = new video("Aula 1 de poo");
        $v[1]= new video("Aula 12 de PHP");
        $v[2]= new video("Aula 15");
        
        $g[0] = new gafanhoto("Jubileu", 22, "m", "juba");
        $g[1]= new gafanhoto("Creuza", 12, "f", "creuzita");
        
        print_r($v);
        
        print_r($g);
        
        ?>
        </pre>
    </body>
</html>
