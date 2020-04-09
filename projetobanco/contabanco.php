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
        $this->setSaldo(0);
        $this->setStatus(false);
        //echo "<p><b>"."OK! Conta criada com sucesso!"."</b></p>";
    }
            
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($this->getTipo() == 'CC'){
            $this->setSaldo(50);
        }elseif ($this->getTipo() == 'CP') {
            $this->setSaldo(150);
        }
        echo "<p><b>"."OK! Conta criada com sucesso!"."</b></p>";
        return;
        
    }
    
    public function fecharConta(){
        if($this->getSaldo() > 0 ){
            $msg = "Conta com dinheiro";
        }elseif($this->getSaldo()<0){
            $msg = "Conta em debito";
        }else{
            $this->setStatus(false);
            $msg = "Conta de ".$this->getDono() ." fechada.";
        }
        echo "<p><b>". $msg. "</b></p>";
        return $msg;
        
    }
    
    public function depositar($v){
        if($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() + $v);
            $msg = "Deposito de $v na conta de ".$this->getDono();
        }else{
            $msg = "Impossivel depositar";
        }
        echo "<p><b>". $msg. "</b></p>";
        return $msg;
        
    }
    
    public function sacar($v){
        if($this->getStatus() == true){
            if($this->getSaldo()>=$v){
                $this->setSaldo($this->getSaldo() - $v);
                $msg = "Saque de ".$v." na conta de ". $this->getDono();
            }else{
                $msg = "Saldo insuficiente";
            }
        }else{
            $msg = "Impossivel sacar";
        }
        echo "<p><b>". $msg. "</b></p>";
        return $msg;
    }
    
    public function pagarMensal(){
        
        if($this->getTipo() == "CC"){
            $v = 12;
        }elseif ($this->getTipo() == "CP"){
            $v = 20;
        }
        if ($this->getStatus() == true){
            if($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
                $msg = "Desconto de Mensalidade ".$v." na conta de ".$this->getDono();
            }else {
                $msg = "Saldo insuficiente";
            }
        }else{
            $msg = "Impossivel pagar";
        }
        echo "<p><b>". $msg. "</b></p>";
        return $msg;
    }
}
