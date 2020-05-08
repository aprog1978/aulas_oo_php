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
        <pre>
        <?php
        require_once './pessoa.php';
        require_once './livro.php';
        // put your code here
        
        $p[0] = new pessoa("Pedro", 22, "M");
        $p[1] = new pessoa("Maria", 31, "F");
        
        $l[0] = new livro("Php basico", "Jose", 300, $p[0]);
        $l[1] = new livro("POO com PHP", "Maria", 500, $p[0]);
        $l[2] = new livro("Php Avançado", "Ana", 800, $p[1]);
        
        //print_r($l[0]);
        
        $l[0]->abrir();
        $l[0]->folhear(300);
        $l[0]->avancarPag();
        
        $l[1]->abrir();
        $l[1]->folhear(300);
        $l[1]->avancarPag();
        
        $l[2]->abrir();
        $l[2]->folhear(300);
        $l[2]->avancarPag();
        
        $l[0]->detalhes();
        $l[1]->detalhes();
        $l[2]->detalhes();
        
        ?>
        </pre>
    </body>
</html>
