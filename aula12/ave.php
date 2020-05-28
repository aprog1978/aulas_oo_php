<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ave
 *
 * @author aprog1978
 */
require_once './animal.php';
class ave extends animal{
    //put your code here
    
    private $corPena;
    
    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }

    public function alimentar() {
        echo "<p>Comendo frutas</p>";
    }

    public function emitirSom() {
        echo "<p>Som de ave</p>";
    }

    public function locomover() {
        echo "<p>Voando</p>";
    }
    
    public function fazerNinho() {
        echo "<p>Construindo um ninho</p>";
    }

}
