<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 12</title>
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
        require_once './mamifero.php';
        require_once './reptil.php';
        require_once './peixe.php';
        require_once './ave.php';
        require_once './canguru.php';
        require_once './cachorro.php';
        require_once './cobra.php';
        require_once './tartaruga.php';
        require_once './goldfish.php';
        require_once './arara.php';
                
        $m=new mamifero();
        $a=new ave();
        $r=new reptil();
        $k=new canguru();
        $c=new cachorro();
        $t =new tartaruga();
        
        /*echo '<hr>';
        print_r($m);
        echo '<hr>';
        print_r($a);
        echo '<hr>';
        print_r($r);
        echo '<hr>';*/
        
        
        $m->locomover();
        $a->locomover();
        $r->locomover();
        $c->locomover();
        $k->locomover();
        $t->locomover();
        
        echo "<hr>";
        
        
        $m->emitirSom();
        
        $c->emitirSom();
        $k->emitirSom();
        
        
        
        ?>
        </pre>
    </body>
</html>
