<?php
  require_once('../Bonus/Cars.php');
  require_once('../Bonus/Users.php');

  $Car1=new Car();
  $User1=new User();
  $Car1->name='class_g';
  $Car1->price=30;
  $Car1->color='blue';
  $Car1->Quality='bon';
  $Car1->save();

  $User1->name='abdoelljabar';
  $User1->age=20;
  $User1->country='maroc';
  $User1->image='ffc';

  $User1->save();





?>