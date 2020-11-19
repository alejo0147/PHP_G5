<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrdenesdeTrabajo
 *
 * @author Cesar
 */
class OrdenesdeTrabajoDTo {
    //put your code here
    private $pkOrden;
    private $fkMaquina;
    private $fkTecnico;
    private $tipoOrden;
    private $descripcion;
    private $piezasRemplazadas;
    private $fechaApertura;
    private $fechaPlanificacion;
    private $fechaCierre;
    private $estado;
    private $observaciones;
    
    function getPkOrden() {
        return $this->pkOrden;
    }

    function getFkMaquina() {
        return $this->fkMaquina;
    }

    function getFkTecnico() {
        return $this->fkTecnico;
    }

    function getTipoOrden() {
        return $this->tipoOrden;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPiezasRemplazadas() {
        return $this->piezasRemplazadas;
    }

    function getFechaApertura() {
        return $this->fechaApertura;
    }

    function getFechaPlanificacion() {
        return $this->fechaPlanificacion;
    }

    function getFechaCierre() {
        return $this->fechaCierre;
    }

    function getEstado() {
        return $this->estado;
    }

    function getObservaciones() {
        return $this->observaciones;
    }

    function setPkOrden($pkOrden) {
        $this->pkOrden = $pkOrden;
    }

    function setFkMaquina($fkMaquina) {
        $this->fkMaquina = $fkMaquina;
    }

    function setFkTecnico($fkTecnico) {
        $this->fkTecnico = $fkTecnico;
    }

    function setTipoOrden($tipoOrden) {
        $this->tipoOrden = $tipoOrden;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setPiezasRemplazadas($piezasRemplazadas) {
        $this->piezasRemplazadas = $piezasRemplazadas;
    }

    function setFechaApertura($fechaApertura) {
        $this->fechaApertura = $fechaApertura;
    }

    function setFechaPlanificacion($fechaPlanificacion) {
        $this->fechaPlanificacion = $fechaPlanificacion;
    }

    function setFechaCierre($fechaCierre) {
        $this->fechaCierre = $fechaCierre;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
    }
}
