<?php


class productViewModel {

    public function __constract(){

    }

    public function getView($pagename='', $data=array()){
        include $pagename;
    }

} 