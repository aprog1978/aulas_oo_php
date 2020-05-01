<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Banco</title>
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
        
        require_once 'contabanco.php';
        $p1 = new contabanco(); // jubileu
        $p2 = new contabanco(); // creuza
        
        $p1->abrirConta("CC");
        $p1->setDono("Jubileu");
        $p1->setNumConta(1111);
        
        $p2->abrirConta("CP");
        $p2->setDono("Creuza");
        $p2->setNumConta(2222);
        
        print_r($p1);
        print_r($p2);
        
        $p1->depositar(300);
        $p2->depositar(500);
        
        print_r($p1);
        print_r($p2);
        
        $p2->sacar(1000);
        
        print_r($p1);
        print_r($p2);
        
        $p1->pagarMensal();
        $p2->pagarMensal();
        
        print_r($p1);
        print_r($p2);
        
        $p1->sacar(338);
        $p2->sacar(630);
        
        $p1->fecharConta();
        $p2->fecharConta();
                
        print_r($p1);
        print_r($p2);
                
        
        
        ?>
        </pre>
    </body>
</html>
