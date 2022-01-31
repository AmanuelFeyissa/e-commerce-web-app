<?php require_once("../resources/config.php") ?>

<?php require_once("cart.php") ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<?php 

    if (isset($_SESSION['product_1'])) {

        echo $_SESSION['product_1'];
    }

?>

    <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">
      <h4 class="text-center bg-danger"><?php display_message(); ?></h4>
      <h1>Checkout</h1>

<form action="">
    <table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>
     
          </tr>
        </thead>
        <tbody>
            <?php cart(); ?>
       </tbody>
    </table>
</form>

 </div><!--Main Content-->

    </div>

    <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>