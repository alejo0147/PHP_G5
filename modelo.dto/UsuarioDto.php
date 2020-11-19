<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDto
 *
 * @author Cesar
 */
class UsuarioDto {
    //put your code here
    private $pkUsuarios;
    private $rol;
    private $documento;
    private $nombres;
    private $apellidos;
    private $correo;
    private $tipoContrato;
    private $password;
    private $estado;
    
    function getPkUsuarios() {
        return $this->pkUsuarios;
    }

    function getRol() {
        return $this->rol;
    }

    function getDocumento() {
        return $this->documento;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getTipoContrato() {
        return $this->tipoContrato;
    }

    function getPassword() {
        return $this->password;
    }

    function getEstado() {
        return $this->estado;
    }

    function setPkUsuarios($pkUsuarios) {
        $this->pkUsuarios = $pkUsuarios;
    }

    function setRol($rol) {
        $this->rol = $rol;
    }

    function setDocumento($documento) {
        $this->documento = $documento;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setTipoContrato($tipoContrato) {
        $this->tipoContrato = $tipoContrato;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }
    
}
