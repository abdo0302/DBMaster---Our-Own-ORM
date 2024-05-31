<?php
   require_once('../Modals/Product.php');

   $product = new Product();
   $product->delete(1);
?>