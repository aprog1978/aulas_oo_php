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
        //Programa principal
        require_once './Pessoa.php';
        require_once './Aluno.php';
        require_once './Professor.php';
        require_once './Funcionario.php';
        
        //$p1 = new Pessoa();
        $p2= new Aluno();
        $p3=new Professor();
        $p4=new Funcionario();
        
        //$p1->setNome("Pedro");
        $p2->setNome("Maria");
        $p3->setNome("Claudio");
        $p4->setNome("Faniana");
        
        //$p1->setSexo("M");
        $p4->setSexo("F");
        
        $p2->setCurso("Informatica");
        $p3->setSalario(2500.75);
        $p4->setSetor("Estoque");
        
        $p3->receberAumento(550.20);
        $p4->mudarTrabalho();
        $p2->cancelarMatriculan();
                
        echo '<br>';
        //print_r($p1);
        echo '<hr>';
        print_r($p2);
        echo '<hr>';
        print_r($p3);
        echo '<hr>';
        print_r($p4);
        echo '<hr>';
        
        ?>
        </pre>
    </body>
</html>
