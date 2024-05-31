<?php
   require_once('../ORM/ORM.php');
  class Car extends ORM {
    protected static $table = 'cars';
    public string $name;
    public int $price;
    public string $color;
    public string $Quality;
  }
?>