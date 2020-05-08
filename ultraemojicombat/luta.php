<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of luta
 *
 * @author aprog1978
 */
require_once 'lutador.php';
class luta {
    //put your code here
   
    private $desafiado, $desafiante;
    private $rounds;
    private $aprovador;
    
    //gets setrs
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovador() {
        return $this->aprovador;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovador($aprovador) {
        $this->aprovador = $aprovador;
    }

    //contrutor
    /*function __construct($desafiado, $desafiante, $rounds, $aprovador) {
        $this->desafiado = $desafiado;
        $this->desafiante = $desafiante;
        $this->rounds = $rounds;
        $this->aprovador = $aprovador;
    }*/
    
    public function marcarLuta($l1, $l2){
        if($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2){
            $this->setAprovador(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        }else{
            $this->setAprovador(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    
    /*public function luta($lut1, $lut2){
        if (this->$lut1.getCategoria() = this->$lut2.getCategoria()) && (this->$lut1 != this->$lut2){
            
        }
        return;
    }*/
    
    public function lutar(){
        if($this->getAprovador()){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor){
                case 0: //empate
                    echo '<hr /><p>Empate!</p>';
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1 : //Desafiado vence
                    echo '<hr /><p>'. $this->desafiado->getNome() . 'venceu a luta contar ' . $this->desafiante->getNome() . '</p>';
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: //Desafiante vence
                    echo '<hr /><p>'. $this->desafiante->getNome() . 'venceu a luta contar ' . $this->desafiado->getNome() . '</p>';
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
            
        }else{
            echo 'Luta não pode acontecer.';
        }
        return;
    }

}
