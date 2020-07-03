<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Lobster&family=Roboto&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./css/main.css">
  <title>Darrin Fry Week 10 PHP Outpu</title>
  <meta name="description" content="CS213 Directory Listing">
</head>

<body class="body-group">
  <header class="header-group">
    <div>
      <div class="heading">
        <h1>Week 10 Mortgage PHP Output</h1>
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
    <?php
        $apr = $_GET['apr']; 
        $term = $_GET['term'];
        $amount = $_GET['amount'];
        $payment = ($amount * ($apr / 100 / 12) / (1 - (pow(1/(1 + ($apr / 100 / 12)), ($term * 12)))))
      ?>

    <?php
        print "Your APR is: $apr% <br/>";
        print "Your Term is: $term years<br/>";
        print "Your Loan Amount is: $$amount<br/><br/>";
        print "Your Monthly Payment Will be: $" . round($payment, 2) . "</br>";
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