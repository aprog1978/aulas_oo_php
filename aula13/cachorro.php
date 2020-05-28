<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cachorro
 *
 * @author aprog1978
 */
require_once './lobo.php';
class cachorro extends lobo {
    //put your code here
    
    function emitirSom() {
        echo "<hr>au! au! au!<hr>";
        
    }
    
    function reagirFrase($frase){
        if($frase=="comida" || $frase== "ola"){
            echo "<hr>abanar e latir";
        } else {
            echo "<hr>rosnar";
        }
    }
    
    function reagirHoraMin($hora, $min) {
        if($hora< 12){
            echo "<hr>abanar";
        }elseif ($hora>=18) {
            echo "<hr>ignorado.";
            
        }else{
            echo"<hr>abanar e latir";
        }
    }
    
    function reagirDono($dono) {
        if($dono){
            echo '<hr>abanar';
        }else{
            echo '<hr>rosnar e latir ';
        }
    }
    
    function reagirIdadePeso($idade, $peso) {
        if($idade<5){
            if($peso<10){
                echo "<hr>abanar";
            } else {
                echo "<hr>latir";
            }
        }else{
            if($peso<10){
                echo "<hr>rosnar";
            }else{
                echo "<hr>ignorar";
            }
        }
    }
}
