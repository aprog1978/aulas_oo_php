<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcionario
 *
 * @author aprog1978
 */
require_once './Pessoa.php';
class Funcionario extends Pessoa{
    //put your code here
    private $setor;
    private $trabalhando;
    
    public function getSetor() {
        return $this->setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setSetor($setor) {
        $this->setor = $setor;
    }

    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }

    public function mudarTrabalho(){
        $this->trabalhando = !$this->trabalhando;
    }
    
}
