<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDao
 *
 * @author Cesar
 */
class UsuarioDao {
    //put your code here
    public function verificarUsuario($ident,$passs){
        $con = Conexion::getInstance();
        try {
            $query=$con->prepare("SELECT * FROM usuarios where documento=? AND password=?"); 
      
            $query->bindParam(1,$ident);
            $query->bindParam(2,$passs);
            $query->execute();        

            return $query->fetch();
        } catch (Exception $ex) {
            echo $exc->getTraceAsString();
        }
    }
    public function verificarUsuario2($ident){
        $con = Conexion::getInstance();
        try {
            $query=$con->prepare("SELECT * FROM usuarios where documento=?"); 
      
            $query->bindParam(1,$ident);
            $query->execute();        

            return $query->fetch();
        } catch (Exception $ex) {
            echo $exc->getTraceAsString();
        }
    }
    public function registrarUsuario(UsuarioDto $usuarioDto){
        $con= Conexion::getInstance();
        $mensaje = "";
        try {
            $query=$con->prepare("INSERT INTO usuarios VALUES('',?,?,?,?,?,?,?,?)");
            $query->bindParam(1,$usuarioDto->getRol());
            $query->bindParam(2,$usuarioDto->getDocumento());
            $query->bindParam(3,$usuarioDto->getNombres());
            $query->bindParam(4,$usuarioDto->getApellidos());
            $query->bindParam(5,$usuarioDto->getCorreo());
            $query->bindParam(6,$usuarioDto->getTipoContrato());
            $query->bindParam(7,$usuarioDto->getPassword());
            $query->bindParam(8,$usuarioDto->getEstado());
            $query->execute();
            $mensaje="Registro exitoso";
        
        } catch (Exception $ex) {
            $mensaje=$ex->getMessage();
        }
        return $mensaje;
    }
    public function consultarUsuarioIdent($identificacion){
     $con= Conexion::getInstance();
     
     try {
     $query=$con->prepare("SELECT * FROM usuarios where documento=?"); 
      
        $query->bindParam(1,$identificacion);
        $query->execute();
        
      return $query->fetch();
     } catch (Exception $exc) {
         echo $exc->getTraceAsString();
     }
     
     }
     public function cambiarEstadoGerentes($estado,$nIdentificacion) {
         $con= Conexion::getInstance();
         try {             
         $query=$con->prepare("UPDATE usuarios set estado=? WHERE documento=?");
         $query->bindParam(1,$estado);
         $query->bindParam(2,$nIdentificacion);
         $query->execute();
         $mensaje="Actualizacion exitosa";       
         } catch (Exception $ex) {
             $mensaje=$ex->getMessage();
         }
         return $mensaje;
     }
}
