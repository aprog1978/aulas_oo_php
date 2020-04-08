<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contabanco
 *
 * @author aprog1978
 */
class contabanco {
    //put your code here
    private $numConta;
    private $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    function getNumConta() {
        return $this->numConta;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }

    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function abrirConta(){
        return;
        
    }
    
    function fecharConta(){
        return;
        
    }
    
    function despositar(){
        return;
    }
    
    function sacar(){
        return;
    }
    
    function pagarMensal(){
        return;
    }
}
