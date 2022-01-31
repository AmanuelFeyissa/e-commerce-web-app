<?php require_once("../resources/config.php") ?>


<?php 

    if(isset($_GET['add'])) {

        $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['add']) . " ");

        confirm($query);

        while($row = fetch_array($query)) {

            if( $row['product_quantity'] != $_SESSION['product_' . $_GET['add']]) {

                $_SESSION['product_' . $_GET['add']] += 1;
                redirect("checkout.php");
            } else{

                set_message("We only have " . $row['product_quantity'] . " " . "{$row['product_title']} " . " " . " Available");
                redirect("checkout.php");
            }

        }
        
    }

    if(isset($_GET['remove'])) {

        $_SESSION['product_' . $_GET['remove']] -= 1;
        
        if ($_SESSION['product_' . $_GET['add']] < 1) {

            redirect("checkout.php");
        } else {
            redirect("checkout.php");
        }
    }


    if (isset($_GET['delete'])) {

        $_SESSION['product_' . $_GET['delete']] = '0';
        redirect("checkout.php");

    }



    function cart() {

        $query = query("SELECT * FROM products");
        confirm($query);

        while($row = fetch_array($query)) {

            $product = <<< DELIMETER

            <tr>
                <td>{$row['product_title']}</td>
                <td>{$row['product_price']}</td>
                <td>{$row['product_quantity']}</td>
                <td>2</td>
                <td><a href="cart.php?remove=1">Remove</a></td>
                <td><a href="cart.php?delete=1">Delete</a></td>
            </tr>



            DELIMETER;

            echo $product;
        }
    }





?>