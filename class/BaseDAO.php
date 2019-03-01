<?php
    class BaseDAO {

        public static function conectar() {
            try {
                $conexao = new PDO(
                    DB_DRIVE . ':host=' . 
                    DB_HOSTNAME . ';dbname=' . 
                    DB_DATABASE, 
                    DB_USERNAME, 
                    DB_PASSWORD);

                $conexao->setAttribute(PDO::ATTR_ERRMODE, 
                    PDO::ERRMODE_EXCEPTION);
                
                return $conexao;
            } 
            catch (PDOException $e) {
                echo ($e->getMessage());
            }
        }
    }
?>