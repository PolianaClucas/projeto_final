<?php

    class Conexao{

        static $con = null;

        public static function getConnection(){
            $host = "127.0.0.1";
            $port = "3306";
            $user = "root";
            $pass = "";
            $database = "db_projeto_final_3e";


            if(!self::$con){
                self::$con = new mysqli($host, $user, $pass, $database, $port);

                if(self::$con->connect_error){
                    echo "Ocorreu um erro:" . self::$con->connect_error;
                    die();
                }
            }
            return self::$con;
            
        }
            
    }

?>