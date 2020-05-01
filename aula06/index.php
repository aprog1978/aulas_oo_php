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
        <h1>Projeto controle remoto</h1>
        <?php
        // put your code here
        require_once './controleremoto.php';
        
        $c = new controleremoto();
        
        $c->ligar();
        $c->abrirMenu();
        $c->maisVolume();
        $c->abrirMenu();
        $c->menosVolume();
        $c->menosVolume();
        $c->abrirMenu();
        
        ?>
    </body>
</html>
