<?php

//the product details index page
include 'application/models/productModel.php';
include 'application/models/productViewModel.php';

$pagename = 'index';


$views = new productViewModel();
$products = new productModel();

$views->getView("index.html");

if(!empty($_GET["action"])){
    if($_GET["action"]=="home"){

        $result = $products->getAll();
        $views->getView("views/products.php", $result);

    }if($_GET["action"]=="product_details.php"){

        $result = $products->getOne($_GET["item"]);
        $views->getView("application/views/current_products.php", $result);

    }
}else{
    $result = $products->getAll();
    $views->getView("application/views/products.php", $result);
}

//display page content
$views->getView("views/index.php");




?>