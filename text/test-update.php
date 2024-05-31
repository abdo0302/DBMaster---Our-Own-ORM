<?php
  require_once('../Modals/Product.php');
  $product = new Product();
  $product->name="y";
  $product->price=3;
  $product->color="red";
  $product->Quality="bon";
  $product->Is_available=true;
 $product->update(3);

?>