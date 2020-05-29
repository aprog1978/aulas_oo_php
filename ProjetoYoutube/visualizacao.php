<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of visualizacao
 *
 * @author aprog1978
 */
require_once './video.php';
require_once './gafanhoto.php';
class visualizacao {
    //put your code here
    
    private $espectador, $filme;
    
    function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
               
    }
    
    function getEspectador() {
        return $this->espectador;
    }

    function getFilme() {
        return $this->filme;
    }

    function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    function setFilme($filme) {
        $this->filme = $filme;
    }

    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota) {
        $this->filme->setAvaliacao($nota);
    }
    
    public function avaliarPorc($porc){
        $nova = 0;
        if($porc <= 20){
            $nova=3;
        }elseif($porc<=50){
            $nova=5;
        }elseif ($porc <=90) {
            $nova=8;
        }else {
            $nova=10;
            
        }
        
        $this->filme->setAvaliacao($nova);
    }

    
    
}
