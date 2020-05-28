<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reptil
 *
 * @author aprog1978
 */
require_once './animal.php';
class reptil extends animal{
    //put your code here
    private $corEscama;
    
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

        
    public function alimentar() {
        echo "<p>Comendo vegetais</p>";
    }

    public function emitirSom() {
        echo "<p>Som de reptil</p>";
    }

    public function locomover() {
        echo "<p>Rastejando</p>";
    }

}
