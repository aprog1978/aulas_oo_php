<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of canguru
 *
 * @author aprog1978
 */
require_once './mamifero.php';
class canguru extends mamifero {
    //put your code here
    
    public function locomover() {
        echo "<p>Pulando</p>";
        
    }
    
    public function emitirSom() {
        echo "<p>Som de mamifero.</p>";  
    }
}
