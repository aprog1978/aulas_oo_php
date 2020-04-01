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
    private $modelo;
    private $ponta;
    private $tampada;
    private $cor;
    function getTampada() {
        return $this->tampada;
    }

    function getCor() {
        return $this->cor;
    }

    function setTampada($tampada) {
        $this->tampada = $tampada;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    
    public function __construct($m, $cor, $p) {
    //public function Caneta(){
        //$this->cor="Azul";
        $this->setModelo($m);
        $this->setCor($cor);
        $this->setPonta($p);
        $this->tampar();
        
    }
    
    public function tampar(){
        $this->setTampada(true);
    }
    
    public function destampar()
    {
        $this->setTampada(false);
    }


        public function  getModelo(){
        return $this -> modelo;
       
    }
    public function setModelo($m){
        $this->modelo= $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta=$p;
    }
    
}
