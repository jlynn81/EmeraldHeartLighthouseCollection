<?php

//Pulls the data from the viewModel

foreach($data as $d){

    echo $d["product_name"];
    echo " ";

    echo $d["product_amount"];
    echo " ";

    echo "<a href=?action=product_details&item=".$d["item"]."><a/>";
    echo "<br>";
}