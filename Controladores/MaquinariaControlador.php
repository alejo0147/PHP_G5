<?php
require_once '../utilidades/Conexion.php';
require_once '../modelo.dto/MaquinariaDto.php';
require_once '../modelo.dao/MaquinariaDao.php';

if (isset($_REQUEST['btnRegistrarMaquina'])){
    $maquinaDto = new MaquinariaDto();
    $maquinaDto2 = new MaquinariaDto();
    $maquinaDao = new MaquinariaDao();
    
    $maquinaDto ->setTipoMaquina($_POST['tipoMaquina']);
    $maquinaDto ->setReferencia($_POST['referenciaMaquina']);
    $maquinaDto ->setSerial($_POST['serialMaquina']);
    $maquinaDto ->setFechaIngreso($_POST['fechaIngreso']);
    $maquinaDto ->setEstado('activo');
    
    $maquinaDto2= $maquinaDao->verificarMaquina($_POST['serialMaquina']);
    if($maquinaDto2==NULL){
        $mensaje = $maquinaDao->RegistrarMaquina($maquinaDto);
        header("Location:../administrador/listadoMaquinas.php?msj=".$mensaje);
    }else{
        $mensaje = 'la maquina ya esta registrada';
        header("Location:../administrador/listadoMaquinas.php?msj=");
    }
    
}elseif (isset($_REQUEST['btnDardeBajaMaquina'])){
    $maquinaDto= new MaquinariaDto();
    $maquinaDto2= new MaquinariaDto();
    $maquinaDao = new MaquinariaDao();
    $maquinaDto2 = $maquinaDao->verificarMaquina($_POST['nSerial']);
    $estado = $maquinaDto2['estado'];
    if ($estado=='activo'){
        $mensaje = $maquinaDao->bajaMaquinaria($_POST['nSerial']);
        header("Location:../administrador/listadoMaquinas.php?msj=".$mensaje);
    }else{
        header("Location:../administrador/listadoMaquinas.php?msj=".$mensaje);
    }
    
}