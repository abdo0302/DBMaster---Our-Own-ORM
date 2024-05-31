<?php
   require_once('../ORM/ORM.php');
  class User extends ORM {
    protected static $table = 'users';
    public string $name;
    public int $age;
    public string $country;
    public string $image;
  }
?>