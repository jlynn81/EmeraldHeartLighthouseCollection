<?php

class DB {
    public function __construct(){
        //create new PDO connection to DB, dump error if connection issues

        try{
            $dsn = "mysql:host=127.0.0.1; port=8889; dbname=product_details";
            $db_user = "root";
            $db_password = "root";

            $this->db = new PDO($dsn, $db_user, $db_password);
        }
        catch (PDOException $error){
            var_dump($error);
        }
    }

}
?>