<?php

include 'db.php';

class productModel extends db{
    public function __construct(){

    }

    public function getAll(){
        $sql = "select * from Products";
        $st = $this->db->prepare($sql);
        $st->execute();

        return $st->fetchAll();
    }

    public function getOne($item=0){

        $sql = "select * from product_details where item = :item";
        $st = $this->db->prepare($sql);
        $st->execute(array(":item"=>$item));

        return $st->fetchAll();
    }
}