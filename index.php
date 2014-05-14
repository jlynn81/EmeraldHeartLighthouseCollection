<?php

session_start();

//Code for the main page

include 'models/productModel.php';
include 'models/productViewModel.php';

$pagename = "main";

$views = new productViewModel();
$products = new productModel();

$views->getView("views/product_details.inc");

if(!empty($_GET["action"])){
    if($_GET["action"]=="home"){

        $result = $products->getAll();
        $views->getView("views/tree.php", $result);

    }if($_GET["action"]=="tree_details"){

        $result = $products->getOne($_GET["id"]);
        $views->getView("views/tree_details.php", $result);
    }
}else{
    $result = $products->getAll();
    $views->getView("views/tree.php", $result);
}
