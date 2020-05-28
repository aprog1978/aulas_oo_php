<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of animal
 *
 * @author aprog1978
 */
abstract class animal {
    //put your code here
    protected $peso, $idade,$membros;
    
    public abstract function emitirSom();
}
