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
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    private $msg;
    
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

    public function __construct(){
        setSaldo(0);
        setStatus(false);
    }
            
    public function abrirConta($t){
        setTipo(t);
        setStatus(true);
        if(getTipo == 'CC'){
            setSaldo(50);
        }elseif (getTipo == 'CP') {
            setSaldo(150);
        }
        return;
        
    }
    
    public function fecharConta(){
        if(getSaldo > 0 ){
            $msg = "Conta com dinheiro";
        }elseif(getSaldo<0){
            $msg = "Conta em debito";
        }else{
            setStatus(false);
        }
        return $msg;
        
    }
    
    public function depositar($v){
        if(getStatus == true){
            setSaldo(getSaldo + $v);
            $msg = getSaldo;
        }else{
            $msg = "Impossivel depositar";
        }
        return $msg;
        
    }
    
    public function sacar($v){
        if(getStatus == true){
            if(getSatldo > $v){
                setSaldo(getSaldo - $v);
            }else{
                $msg = "Saldo insuficiente";
            }
        }else{
            $msg = "Impossivel sacar";
        }
        return $msg;
    }
    
    public function pagarMensal(){
        
        if(getTipo == "CC"){
            $v = 12;
        }elseif (getTipo == "CP"){
            $v = 20;
        }
        if (getStatus == true){
            if(getSaldo > $v){
                setSaldo(getSaldo - $v);
                $msg = getSaldo;
            }else {
                $msg = "Saldo insuficiente";
            }
        }else{
            $msg = "Impossivel pagar";
        }
        
        return $msg;
    }
}
