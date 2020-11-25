<?php

   // require_once $_SERVER['DOCUMENT_ROOT'] . './Model/connectvars.php';
    require_once('./model/connectvars.php');
    class Conectar_Databases{

        private $hostname = DB_HOST;
        private $database = DB_NAME;
        private $user = DB_USER;
        private $password = DB_PASSWORD;
        private $charset = DB_CHARSET;
        private $conexion;

        public function getconection(){
            try{
                $opciones = array(
                    PDO::ATTR_PERSISTENT=>true,
                    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
                );

                $this-> conexion = new PDO('mysql:host='. $this-> hostname .'; dbname='.$this->database,
                $this-> user, $this-> password, $opciones);
                $this-> conexion-> exec('SET NAME'. $this->charset . '');
                
                echo 'Conexión Exitosa';
            }catch (PDOException $error){
                echo "! ERROR: ¡ " . $error-> getMessage();
                die();
            }
            return $this-> conexion;
        }
    }
