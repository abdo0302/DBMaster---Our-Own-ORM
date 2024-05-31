<?php
   require_once('../ORM/ORM.php');
  class Product extends ORM {
    protected static $table = 'products';
    public string $name;
    public int $price;
    public string $color;
    public string $Quality;
    public bool $Is_available;
  }
?>



