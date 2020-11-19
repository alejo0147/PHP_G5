<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexion
 *
 * @author alejo
 */
class Conexion {
private static $con=null;


    public static function conectar(){
        
        try { Conexion::$con = new PDO("mysql:host=localhost;dbname=minera", "root", "");
          Conexion::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          //echo 'conexion exitosa';
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }

    }
    
    public static function  getInstance(){
    if (Conexion::$con==null) {
            Conexion::conectar();
        }
        return Conexion::$con;
    }
    
    
}
    