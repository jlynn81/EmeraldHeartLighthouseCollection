<?php


class DB {

    public function __construct(){
        //create new PDO connection to DB, includes Dump Error if there is a connection issue

        try{
            $dsn = "mysql:host=127.0.0.1; port=8889; dbname=product_database";
            $db_user = "root";
            $db_password = "root";

            $this->db = new \PDO($dsn, $db_user, $db_password);
        }
        catch (\PDOException $error){
            var_dump($error);
        }
    }

} 