<?php

require_once '../utilidades/Conexion.php';
require_once '../modelo.dao/UsuarioDao.php';
require_once '../modelo.dto/UsuarioDto.php';

if (isset($_REQUEST['btnIngresar'])){
    $usuarioDto = new UsuarioDto();
    $usuarioDao = new UsuarioDao();
    
    $usuarioDto = $usuarioDao->verificarUsuario($_POST['nIdentificacion'], $_POST['pass']);
    if($usuarioDto!=NULL){
        $rolPagina = $usuarioDto['rol'];
        header("Location:../".$rolPagina."/paginaPrincipal.php");     
    }else{
        header("Location:../index.php?msj=");
    }
}