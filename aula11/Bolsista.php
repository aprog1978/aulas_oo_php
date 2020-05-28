<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bolsista
 *
 * @author aprog1978
 */
require_once './Aluno.php';
class Bolsista extends Aluno{
    //put your code here
    
    private $bolsa;
    
    public function renovarBolsa() {
        echo '<p>Bolsa renovada</p>';
        
    }
    
    function getBolsa() {
        return $this->bolsa;
    }

    function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }

    public function pagarMensalidade() {
        echo "<p> Pagando mensalidde do Bolsista $this->nome, bolsista paga com desconto.";
        
    } 
}
