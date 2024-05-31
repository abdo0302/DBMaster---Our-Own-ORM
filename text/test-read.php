<?php
  require_once('../Modals/Product.php');

  $product = new Product();
  $result = $product->find(1);
  foreach($result as $key=>$value){
    echo "$key  "."<=>"."  $value";
    echo "<br>";
  }
?>