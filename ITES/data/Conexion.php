<?php

class Conexion
{

    /**
     * Conexión a la base data
     *
     * @return PDO
     */
    public static function conectar()
    {
        try {

            $cn = new PDO("mysql:host=localhost;dbname=ites", "root", "");

            return $cn;

        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

}
