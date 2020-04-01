<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caneta
 *
 * @author aprog1978
 */
class Caneta {
    //put your code here
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function  rabiscar(){
        if($this->tampada == true){
            echo '<p>Erro! nao posso rabiscar</p>';
        }else{
            echo '<p>estou rabiscando.</p>';
        }
    }
    
    function  tampar(){
        $this->tampada=true;
        
        
    }
    
    function  destampar(){
        $this->tampada= false;
    }
    
}
