<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Maquinaria
 *
 * @author Cesar
 */
class MaquinariaDto {
    //put your code here
    private $pkMaquinaria;
    private $tipoMaquina;
    private $referencia;
    private $serial;
    private $fechaIngreso;
    private $estado;
    
    function getPkMaquinaria() {
        return $this->pkMaquinaria;
    }

    function getTipoMaquina() {
        return $this->tipoMaquina;
    }

    function getReferencia() {
        return $this->referencia;
    }

    function getSerial() {
        return $this->serial;
    }

    function getFechaIngreso() {
        return $this->fechaIngreso;
    }

    function getEstado() {
        return $this->estado;
    }

    function setPkMaquinaria($pkMaquinaria) {
        $this->pkMaquinaria = $pkMaquinaria;
    }

    function setTipoMaquina($tipoMaquina) {
        $this->tipoMaquina = $tipoMaquina;
    }

    function setReferencia($referencia) {
        $this->referencia = $referencia;
    }

    function setSerial($serial) {
        $this->serial = $serial;
    }

    function setFechaIngreso($fechaIngreso) {
        $this->fechaIngreso = $fechaIngreso;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }


}
