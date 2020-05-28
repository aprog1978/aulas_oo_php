<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cachorro
 *
 * @author aprog1978
 */
require_once './mamifero.php';
class cachorro extends mamifero {
    //put your code here
    public function emitirSom() {
        echo "<p>Au Au.</p>";  
    }
}
