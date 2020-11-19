<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MaquinariaDao
 *
 * @author cemaya
 */
class MaquinariaDao {
    //put your code here
    public function RegistrarMaquina(MaquinariaDto $maquinariaDto){
        $con= Conexion::getInstance();
        $mensaje = "";
        try {
           $query=$con->prepare("INSERT INTO maquinaria VALUES('',?,?,?,?,?)");
           $query->bindParam(1,$maquinariaDto->getTipoMaquina());  
           $query->bindParam(2,$maquinariaDto->getReferencia());  
           $query->bindParam(3,$maquinariaDto->getSerial());  
           $query->bindParam(4,$maquinariaDto->getFechaIngreso());  
           $query->bindParam(5,$maquinariaDto->getEstado());
           $query->execute();
           $mensaje="Registro exitoso";
           
        } catch (Exception $ex) {
            $mensaje=$ex->getMessage();
        }
         return $mensaje;
    }
    public function verificarMaquina($serial){
        $con = Conexion::getInstance();
        try {
            $query=$con->prepare("SELECT * FROM maquinaria where serial=?"); 
      
            $query->bindParam(1,$serial);
            $query->execute();        

            return $query->fetch();
        } catch (Exception $ex) {
            echo $exc->getTraceAsString();
        }
    }
    public function bajaMaquinaria($serial) {
         $con= Conexion::getInstance();
         try {             
         $query=$con->prepare("UPDATE maquinaria set estado='baja' WHERE serial=?");
         $query->bindParam(1,$serial);
         $query->execute();
         $mensaje="Actualizacion exitosa";       
         } catch (Exception $ex) {
             $mensaje=$ex->getMessage();
         }
         return $mensaje;
     }
}
