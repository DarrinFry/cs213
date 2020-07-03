<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Lobster&family=Roboto&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./css/main.css">
  <title>Darrin Fry Week 11 PHP Form Processing</title>
  <meta name="description" content="CS213 Directory Listing">
</head>

<body class="body-group">
  <header class="header-group">
    <div>
      <div class="heading">
        <h1>Week 11 PHP Form Processing </h1>
      </div>
      <nav>
        <ul class="navigation">
          <li><a class="ham" href="#">&#9776; Menu</a></li>
          <li><a class="index" href="../index.html">CS213 Assignments</a></li>

        </ul>
      </nav>
    </div>
  </header>

  <div class="hero-image"></div>

  <div id="php-output" style="width: 50%; padding:30px; margin: auto;  text-align: left;">
    

    <h2>Please Confirm Your Purchase: <br /></h2>
      <?php
          $item_0 = $_POST['item_0'];
          $item_1 = $_POST['item_1'];
          $item_2 = $_POST['item_2'];
          $item_3 = $_POST['item_3'];
          $item_4 = $_POST['item_4'];
          $item_5 = $_POST['item_5'];
          $item_6 = $_POST['item_6'];
          $item_7 = $_POST['item_7'];
          $item_8 = $_POST['item_8'];
          $first_name = $_POST['first_name'];
          $last_name = $_POST['last_name'];
          $street_address = $_POST['street_address'];
          $city = $_POST['city'];
          $state = $_POST['state'];
          $zipcode = $_POST['zipcode'];
          $phone = $_POST['phone'];
          $email = $_POST['txtEmail'];
          $card = $_POST['card'];
          $credit_card = $_POST['credit_card'];
          $exp_date = $_POST['exp_date'];
          $total = 0;

        echo "<strong>Name:</strong> $first_name $last_name<br />";
        echo "<strong>Address:</strong> $street_address $city $state $zipcode<br />";
        echo "<strong>Phone:</strong> $phone<br />";
        echo "<strong>Email:</strong> $email<br />";
        echo "<br />";
        echo "<strong>Your selected items and cost:</strong> <br />";
        if($item_0 == 1234.56){
          echo "<p>Two Tone ring featuring white diamonds and bluesapphires - $1234.56</p> <br />";
          $total += 1234.56;
        }
        if($item_1 == 2345.67) {
          echo "<p>Platinum and diamond art-deco inspired ring accented with emeralds - $2345.67</p> <br />";          
          $total += 2345.67;
        }
        if($item_2 == 3456.78) {
          echo "<p>A black tahitian pearl accented with diamonds in a modern mounting - $3456.78</p> <br />";         
          $total += 3456.78;
        }
        if($item_3 == 4567.89) {
          echo "<p>A substantial aquamarine framed with colorless diamonds - $4567.89</p> <br />";          
          $total += 4567.89;
        }
        if($item_4 == 5678.90) {
          echo "<p>A double halo ring featuring diamonds and bright pink sapphires - $5678.90</p> <br />";         
          $total += 5678.90;
        }
        if($item_5 == 6789.01) {
          echo "<p>A bright round diamond framed by more bright diamonds and accented with deep blue sapphires - $6789.01</p> <br />";         
          $total += 6789.01;
        }
        if($item_6 == 7890.12) {
          echo "<p>A modern rose and white gold ring with colorless diamonds - $7890.12</p> <br />";         
          $total += 7890.12;
        }
        if($item_7 == 8901.23) {
          echo "<p>Pink tourmaline frame the substantial oval diamond - $8901.23</p> <br />";         
          $total += 8901.23;
        }
        if($item_8 == 9012.34) {
          echo "<p>A diamond cluster ring set in rose and white gold - $9012.34</p> <br />";        
          $total += 9012.34;
        }
        echo "<strong>Total:</strong> $$total<br />";
        echo "<br />";
        echo "<strong>Credit card:</strong> $card<br />";
        echo "<strong>Expiration date:</strong> $exp_date<br />";
        echo "<br />";
        echo "<form action=\"assign11_a.php\" method=\"POST\">";
        echo "<button type=\"submit\" name=\"confirmed\" value=\"confirmed\">Confirm</button>";
        echo "<button type=\"submit\" name=\"confirmed\" value=\"cancelled\">Cancel</button>";
        echo "</form>";
      ?>  
  </div>


  <footer class="footer-content">
    <p>&copy; 2020 | Darrin Fry | Utah |
      <a href="https://www.byui.edu/online " target="_blank">BYUI Online Learning</a> 
    </p>
    
    <script>
      const hambutton = document.querySelector(".ham");
      hambutton.addEventListener("click", toggleMenu, false);

      function toggleMenu() {
        document.querySelector(".navigation").classList.toggle("responsive");
      }
    </script>
  </footer>

</body>

</html>

   