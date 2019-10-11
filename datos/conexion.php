<?php

class Conexion{
    /**
     * Conexión a la base de datos
     * 
     * @return conexionPDO
     */
    public static function conectar(){
        try{
            $cn = new PDO("mysql:host=localhost; dbname=login-php","root","");
            return $cn;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}