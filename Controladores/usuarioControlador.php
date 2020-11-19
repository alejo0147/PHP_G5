<?php
require_once '../utilidades/Conexion.php';
require_once '../modelo.dto/UsuarioDto.php';
require_once '../modelo.dao/UsuarioDao.php';

if (isset($_REQUEST['btnRegistrarGerente'])){
    $usuarioDto = new UsuarioDto();
    $usuarioDto2 = new UsuarioDto();
    $usuarioDao = new UsuarioDao();
    
    $usuarioDto->setRol('gerente');
    $usuarioDto->setDocumento($_POST['nIdentificacion']);
    $usuarioDto->setNombres($_POST['nombreGerente']);
    $usuarioDto->setApellidos($_POST['apellidosGerente']);
    $usuarioDto->setCorreo($_POST['correoGerente']);
    $usuarioDto->setTipoContrato($_POST['tipoContratoGerente']);
    $usuarioDto->setPassword($_POST['passGerente']);
    $usuarioDto->setEstado('activo');
    
    $usuarioDto2 = $usuarioDao->verificarUsuario2($_POST['nIdentificacion']);
    if($usuarioDto!=$usuarioDto2){
        $mensaje = $usuarioDao->registrarUsuario($usuarioDto);
        header("Location:../administrador/listadoGerentes.php?msj=".$mensaje);
    }else{
        header("Location:../administrador/paginaPrincipal.php?msj=");
    }
}elseif (isset($_REQUEST['btnCambEstadoGerente'])) {
    $usuarioDto = new UsuarioDto();
    $usuarioDto2 = new UsuarioDto();
    $usuarioDao = new UsuarioDao();
    $usuarioDto2 = $usuarioDao->verificarUsuario2($_POST['nIdentificacion']);
    $estado = $usuarioDto2['estado'];
    if ($estado=='activo'){
        $estadonew = 'inactivo';
    }else{
        $estadonew = 'activo';
    }
    $mensaje = $usuarioDao->cambiarEstadoGerentes($estadonew, $_POST['nIdentificacion']);
    header("Location:../administrador/listadoGerentes.php?msj=".$mensaje);
    
}elseif (isset($_REQUEST['btnRegistrarTecnico'])) {
    $usuarioDto = new UsuarioDto();
    $usuarioDto2 = new UsuarioDto();
    $usuarioDao = new UsuarioDao();
    
    $usuarioDto->setRol('tecnico');
    $usuarioDto->setDocumento($_POST['nIdentificacion']);
    $usuarioDto->setNombres($_POST['nombreTecnico']);
    $usuarioDto->setApellidos($_POST['apellidosTecnico']);
    $usuarioDto->setCorreo($_POST['correoTecnico']);
    $usuarioDto->setTipoContrato($_POST['tipoContratoTecnico']);
    $usuarioDto->setPassword($_POST['passTecnico']);
    $usuarioDto->setEstado('activo');
    
    $usuarioDto2 = $usuarioDao->verificarUsuario2($_POST['nIdentificacion']);
    if($usuarioDto!=$usuarioDto2){
        $mensaje = $usuarioDao->registrarUsuario($usuarioDto);
        header("Location:../administrador/listadoTecnicos.php?msj=".$mensaje);
    }else{
        header("Location:../administrador/paginaPrincipal.php?msj=");
    }
    }elseif (isset($_REQUEST['btnCambEstadoTecnico'])) {
    $usuarioDto = new UsuarioDto();
    $usuarioDto2 = new UsuarioDto();
    $usuarioDao = new UsuarioDao();
    $usuarioDto2 = $usuarioDao->verificarUsuario2($_POST['nIdentificacion']);
    $estado = $usuarioDto2['estado'];
    if ($estado=='activo'){
        $estadonew = 'inactivo';
    }else{
        $estadonew = 'activo';
    }
    $mensaje = $usuarioDao->cambiarEstadoGerentes($estadonew, $_POST['nIdentificacion']);
    header("Location:../administrador/listadoTecnicos.php?msj=".$mensaje);
    

}