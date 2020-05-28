<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of peixe
 *
 * @author aprog1978
 */
require_once './animal.php';
class peixe extends animal {
    //put your code here
    
    private $corEscama;
    
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    public function alimentar() {
        echo "<p>Comendo substancias</p>";
    }

    public function emitirSom() {
        echo "<p>Glub glub</p>";
    }

    public function locomover() {
        echo "<p>Soltou uma bolha</p>";
    }

}
