
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W10 PHP Mortgage Calculator</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<?php

//  This function reads the form "query string"
//  
// This function handles both an http "get".
$apr = $_GET['apr']; 
$term = $_GET['term'];
$amount = $_GET['amount'];
$monthly = ($amount * ($apr / 100 / 12) / (1 - (pow(1/(1 + ($apr / 100 / 12)), ($term * 12)))))
 ?>
    
<h3>The values submitted were: <br/><br/>
      <?php
         print "APR: $apr% <br/>";
         print "Term: $term years<br/>";
         print "Amount: $$amount<br/><br/>";
         print "Montyly Payment: $" . round($monthly, 2) . "</br>";
         ?> 
</body>
</html>