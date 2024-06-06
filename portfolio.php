<!DOCTYPE html>
<html>
  <head>
    <title>services</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css" id="dark-mode-custom-style"></style>
    <link type="text/css" id="dark-mode" rel="stylesheet" href="">

    <style>

        * {box-sizing: border-box;}
            body {font-family: Verdana, sans-serif;}
            .mySlides {display: none;}
            img {vertical-align: middle;}

            /* Slideshow container */
            .slideshow-container {
              max-width: 750px;
              position: relative;
              margin: auto;
            }

            /* Caption text */
            .text {
              color: #f2f2f2;
              font-size: 15px;
              padding: 8px 12px;
              position: absolute;
              bottom: 8px;
              width: 100%;
              text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
              color: #f2f2f2;
              font-size: 12px;
              padding: 8px 12px;
              position: absolute;
              top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
              height: 15px;
              width: 15px;
              margin: 0 2px;
              background-color: #bbb;
              border-radius: 50%;
              display: inline-block;
              transition: background-color 0.6s ease;
            }

            .active {
              background-color: #717171;
            }

            /* Fading animation */
            .fade {
              -webkit-animation-name: fade;
              -webkit-animation-duration: 10s;
              animation-name: fade;
              animation-duration: 5s;
            }

            @-webkit-keyframes fade {
              from {opacity: .4} 
              to {opacity: 1}
            }

            @keyframes fade {
              from {opacity: .4} 
              to {opacity: 1}
            }



        h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
        body, html {
            margin: 0;
            font: 400 15px/1.8 "Lato", sans-serif;
            color: #777;
        }

        .w3-bar .w3-button {
         padding: 16px;
        }

            table {
                    border-collapse: collapse;
                    width: 100%;
                    color: #000000;
                    font-family: monospace;
                    font-size: 25px;
                    text-align: center;
                }

            th {
                background-color: #588c7e;
                color: white;
             }
                tr:nth-child(even) {background-color: #f2f2f2}

                header {
                    list-style-type: none;      
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                    background-color: #333; 
                    }

                li {
                    float: left;
                    }
                li a {
                    display: block;
                    color: white;
                    text-align: center;
                    padding: 20px 20px;
                    text-decoration: none;
                    }

                li a:hover {
                        background-color: #111;
                        }
    </style>
  </head>
    
      <header>
        <div class="w3-top">
          <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a href="home.html" class="w3-bar-item w3-button w3-wide"><img src="logo-sm-2-1.png"></a>
                <!-- Right-sided navbar links -->
             <div class="w3-right w3-hide-small">
                <a href="SERVICES.html" class="w3-bar-item w3-button">SERVICES</a>
                <a href="portfolio.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i>PORTFOLIO</a>
                <a href="contact us.html" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i>CONTACT</a>
                <a href="sign up and login.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i>SIGN IN / SIGN UP</a>  
            </div>
          </div>
        </div>
    </header>
<body>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="starbucks-@-jabriya.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="Diesel1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="pinkberry.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="Shake-Shack1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="fitout-box-1.jpg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
    <div style="overflow-x: auto;">
        <table>
      <tr>
      <th>Id</th>
      <th>name</th>
      <th>Client</th>
      <th>year</th>
      <th>Progress</th>
      </tr>
        <?php
      $conn = mysqli_connect("localhost", "root", "","construction");
  
      // Check connection
      if ($conn->connect_error)
       {
        die("Connection failed: " . $conn->connect_error);
       }

      $sql = "SELECT id, name, client, year, progress FROM projects";

      $result = $conn->query($sql);

      if ($result->num_rows > 0)
       {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] .              "</td><td>" . $row["client"]. "</td></td>" . "</td><td>" . $row["year"].        "</td></td>" . "</td><td>" . $row["progress"]. "</td></tr>";
        }
      echo "</table>";
      }
      else
       { echo "0 results"; }

      $conn->close();
        ?>
    </table>

        
    </div>
</body>
</html>