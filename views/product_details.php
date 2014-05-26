<div id="item_list">

    <?php

    foreach($data as $d){

        echo "<table>";

        echo "<img src='../css/images/product-images/unicorn1.jpg' alt='unicorn'/>";

        echo $d["product_name"];
        echo $d["product_description"];
        echo $d["product_amount"];
        echo $d["artist_designer"];

        echo "<img src='../css/images/product-images/clown1.jpg' alt='star_clown'/>";

        echo $d["product_name"];

        echo "</table>";
    }

    ?>

</div>