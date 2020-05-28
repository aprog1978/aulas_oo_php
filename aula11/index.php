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
        require_once './Visitante.php';
        require_once './Aluno.php';
        require_once './Bolsista.php';
        require_once './Professor.php';
        require_once './Tecnico.php';
        
        // put your code here
        $v1 = new Visitante();
        $v1->setNome("Juvenal");
        $v1->setIdade(22);
        
        $a1 = new Aluno();
        $a1->setNome("Pedro");
        $a1->setMatricula(1111);
        $a1->setIdade(16);
        $a1->setSexo("M");
        $a1->setCurso("Informatica");
        
        
        $b1 =new Bolsista();
        
        $b1->setMatricula(1112);
        $b1->setNome("Jubileu");
        $b1->setBolsa(12.5);
        $b1->setCurso("Administração");
        $b1->setIdade(17);
        
        $p1 = new Professor();
        $p1->setNome("Joao");
        $p1->setIdade(43);
        $p1->setSexo("M");
        $p1->setSalario(1100,10);
        $p1->setEspecialidade("Prof. Informatica");
        
        $t1= new Tecnico();
        $t1->setNome("Tonico");
        $t1->setIdade(21);
        $t1->setCurso("Eletronica");
        $t1->setMatricula(1113);
        $t1->setSexo("M");
        $t1->setRegistroProfissional("Tec. Eletronico");
        
        
        echo '<hr>';
        print_r($v1);
        echo '<hr>';
        print_r($a1);
        $a1->pagarMensalidade();
        echo '<hr>';
        print_r($b1);
        $b1->pagarMensalidade();
        echo '<hr>';
        print_r($p1);
        $p1->receberAumento();
        echo '<hr>';
        print_r($t1);
        $t1->pagarMensalidade();
        $t1->praticar();
            
        echo '<hr>';
        
        
        ?>
        </pre>
    </body>
</html>
