<?php

//the product details index page
include 'application/models/productModel.php';
include 'application/models/productViewModel.php';

$pagename = '';


$views = new productViewModel();
$products = new productModel();

$views->getView("views/current_products.php");

if(!empty($_GET["action"])){
    if($_GET["action"]=="product_details"){
        $result = $products->getOne($_GET["item"]);
        $views->getView("application/views/current_products.php", $result);
    }
}else{
    $result = $products->getAll();
    $views->getView("application/views/products.php", $result);
}

//display page content
$views->getView("views/current_products.php");



?>