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
    
    <?php
    $confirmed = $_POST['confirmed']; 
    ?>

    <?php
      if ($confirmed == "confirmed"){
        print "<h3>Your Purchase Has Been Confirmed.</h3><br /> <h3> Thank You For Your Business! </h3><br />";
      }
      else {
        print "<h3>Your Purchase Has Been Cancelled.</h3> <br />";
      }
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

   





