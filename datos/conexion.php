<?php

class Conexion{
    /**
     * Conexión a la base de datos
     * 
     * @return PDO
     */
    public static function conectar(){
        try{
            $cn = new PDO("mysql:host=localhost; dbname=login-php","root","");

            echo "Conectado";
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}