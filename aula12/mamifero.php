<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mamifero
 *
 * @author aprog1978
 */
require_once './animal.php';
class mamifero extends animal{
    //put your code here
    
    private $corPelo;
    
    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }

        
    public function alimentar() {
        echo "<p>Mamando.</p>";
    }

    public function emitirSom() {
        echo "<p>Som de mamifero.</p>";  
    }

    public function locomover() {
        echo "<p>Correndo</p>";
    }

}
