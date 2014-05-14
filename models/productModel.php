<?php

include 'DB.php';


class productModel extends DB{

    public function __constract(){

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