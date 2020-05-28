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
class mamifero extends animal {
    //put your code here
    protected $corPelo;


    public function emitirSom() {
        echo "<p>Som de mamifero</p>";
    }
}
