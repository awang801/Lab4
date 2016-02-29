 
<!DOCTYPE html>
<html>
  <head>
  </head>

  <body>
    <h2><i>Alan Wang's Delicious bowls of soup receipt</i></h2>
    <?php
      $shippingName = array("7 Day", "Overnight", "3 Day");
      $shippingCost = array(0, 50, 5);
      $shipping = $_POST["shipping"];
      $q1 = $_POST['q1'];
      $q2 = $_POST['q2'];
      $q3 = $_POST['q3'];
      $total = $q1 * 50.99 + $q2 * 199.99 + $q3 * 4123530.99 + $shippingCost[$shipping];
      echo '<table class="table" id="receipt"><tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>';
      echo '<tr><th>Soup</th><td>' . $q1 . '</td><td>$50.99</td><td>' . $q1 * 50.99 . '</td></tr>';
      echo '<tr><th>Extra Cheap Soup</th><td>' . $q2 . '</td><td>$199.99</td><td>' . $q2 * 199.99 . '</td></tr>';
      echo '<tr><th>Really Cheap Soup</th><td>' . $q3 . '</td><td>$4123530.99</td><td>' . $q3 * 4123530.99 . '</td></tr>';
      echo '<tr><th>Shipping</th><td colspan="2">' . $shippingName[$shipping] . '</td><td>$' . $shippingCost[$shipping] . '</td></tr>';
      echo '<tr><th colspan="3">Total Cost:</th><th>$' . $total . '</th></tr></form>';
     ?>
  </body>
</html>