<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
         }
    </style>
</head>
<body>
    <?php
  require_once('../Modals/Product.php');
  $product = new Product();
  $result = $product->findAll();

  echo '<table>';
  echo '<tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>color</th>
                <th>Quality</th>
                <th>Is_available</th>
          </tr>';
  foreach($result as $r){
     echo '<tr>';
      foreach($r as $a=>$b) {
         echo '<th>'.$b.'</th>';
      }
     echo '</tr>';
  }
  echo '</table>';


?>
</body>
</html>
