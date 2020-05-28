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
        <?php
        // put your code here
        require_once './mamifero.php';
        require_once './lobo.php';
        require_once './cachorro.php';
        
        $m = new mamifero();
        $c = new cachorro();
        $l= new lobo();
        
        $m->emitirSom();
        $c->emitirSom();
        $l->emitirSom();
        
        $c->reagirFrase("ola");
        $c->reagirFrase("apanhar");
        
        $c->reagirHoraMin(11, 4);
        $c->reagirHoraMin(21, 00);
        
        $c->reagirDono(true);
        $c->reagirDono(false);
        
        $c->reagirIdadePeso(2, 12.5);
        $c->reagirIdadePeso(17, 4.5)
        ?>
    </body>
</html>
