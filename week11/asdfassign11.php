<?php

  $first_name = $last_name = $address = $phone = $card = $credit_card = $exp_date = "";


  $item_0 = $_POST['item_0'];
  $item_1 = $_POST['item_1'];
  $item_2 = $_POST['item_2'];
  $item_3 = $_POST['item_3'];
  $item_4 = $_POST['item_4'];
  
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $card = $_POST['card'];
  $credit_card = $_POST['credit_card'];
  $exp_date = $_POST['exp_date'];
  

?>




<!DOCTYPE html>
<html lang = "en">
  <meta charset = "utf-8" />
  <title>Purchase Confirmation</title>
  <body>
    <h3>Confirm Your Purchase: <br /></h3>
      <?php
        

        echo "Name: $first_name $last_name<br />";
        echo "Address: $address<br />";
        echo "Phone: $phone<br />";
        echo "<br />";

        $total = 0;
        
        echo "Items Selected for Purchase: <br />";
        // check each item in the checkboxes and add the relevant amount total
        if($item_0 == 1){
          echo "New Mexico Festival Trip - $750<br />";
          $total += 750;
        }
        if($item_1 == 1) {
          echo "St. George Trip - $850<br />";
          $total += 850;
        }
        if($item_2 == 1) {
          echo "Cedar Ridge Trip - $950<br />";
          $total += 950;
        }
        if($item_3 == 1) {
          echo "Rio Grande Trip - $650<br />";
          $total += 650;
        }
        if($item_4 == 1) {
          echo "Surprise Me! Trip - $1550<br />";
          $total += 1550;
        }
        
      

        echo "Total: $$total<br />";
        echo "<br />";

        echo "Credit card type: $card<br />";
        echo "Credit card expiration date: $exp_date<br />";

        echo "<br />";
        echo "<form action=\"assign11_a.php\" method=\"POST\">";
        echo "<button type=\"submit\" name=\"confirmed\" value=\"confirmed\">Confirm</button>";
        echo "<button type=\"submit\" name=\"confirmed\" value=\"cancelled\">Cancel</button>";
        echo "</form>";
      ?>  
   

</body>
</html>