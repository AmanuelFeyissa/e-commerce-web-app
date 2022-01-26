<?php

// helper functions
// a function to redirect
function redirect($location){

    header("Location: $location ");
}

function query($sql){

    global $connection;
    return mysqli_query($connection, $sql);
}

function confirm($result) {
    global $connection;

    if (!$result){
        die("QUERY FAILED " . mysqli_error($connection));
    }
}

// to prevent sql injection attacks and to ignore spaces and other things when we using login
function escape_string($string) {

    global $connection;

    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result) {

    return mysqli_fetch_array($result);
}


// get products 

function get_products() {

    $query = query(" SELECT * FROM PRODUCTS");
    confirm($query);

    while($row = fetch_array($query)) {
        // Creating a herodoc
        $product = <<< DELIMETER
        <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
            <a href = "item.php?id={$row['product_id']}" > <img src="{$row['product_image']}" alt=""></a>
            <div class="caption">
                <h4 class="pull-right">Birr {$row['product_price']}</h4>
                <h4><a href="product.html">{$row['product_title']}</a>
                </h4>
                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                <a class="btn btn-primary" target="_blank" href="item.php?id={$row['product_id']}">Add to cart</a>
            </div>
            
        </div>
        </div>

        DELIMETER;

        echo $product;
    }
}

?>