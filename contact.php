<!DOCTYPE html>
<html>

<head>
  
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Empire Fruit Village</title>

  
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  
  <link href="css/style.css" rel="stylesheet" />
  
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    
    <div class="brand_box">
      <a class="navbar-brand" href="home.php">
        <span>
         Empire Fruit Village
        </span>
      </a>
    </div>
    
  </div>

  

  <section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="home.php">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">ABOUT US </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="fruit.php">FRUITS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="testimonial.php">REVIEWS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">CONTACT US</a>
                </li>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>

  
  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-lg-2 col-md-10 offset-md-1">
          <div class="heading_container">
            <hr>
            <h2>
              Request A call back
            </h2>
          </div>
        </div>
      </div>

      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
            <form method="post">

              <?php 

                if (isset($_POST['send'])) {
                  
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "fruits";

                    // Create connection
                      $conn = mysqli_connect($servername, $username, $password, $dbname);
                      // Check connection
                      if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                      }

                      $Username = $_POST['username'];
                      $Email = $_POST['email'];
                      $phone = $_POST['phone'];
                      $Message = $_POST['message'];

                    $sql = "INSERT INTO types(Name, Email, Phonenumber, Message)VALUES('$Username', '$Email', '$phone', '$Message')";

                    if (mysqli_query($conn, $sql)) {

                        echo "Message Sent!";
                    }else{
                      echo "Error: ".mysqli_error();
                    }

                }

              ?>
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Full Name" name="username">
                  </div>
                  <div>
                    <input type="email" placeholder="Email" name="email">
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" name="phone">
                  </div>
                  <div>
                    <input type="text" class="message_input" placeholder="Message" name="message">
                  </div>
                  <div>
                    <input type="submit" name="send" value="SEND" style="background-color: orange;">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6 px-0">
            <div class="map_container">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4254239433576!2d6.720840874993885!3d6.207482326755024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1043f34457440435%3A0xb0feee430246e065!2sasaba%20Delta%20state!5e0!3m2!1sen!2sng!4v1715171779145!5m2!1sen!2sng" width="600" height="400" frameborder="0" style="border:0; width: 100%; height:130%" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_logo">
        <h2>
          Empire Fruit Village
        </h2>
      </div>
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="images/location.png" alt="">
              <span>
                162 Eagle Square Plaza, Asaba Delta State
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/call.png" alt="">
              <span>
                Call : +2347033807659
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/mail.png" alt="">
              <span>
                empiredefruits@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            
            <form method="post">
              <?php 

                if (isset($_POST['subscribe'])) {
                  
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "subscribe";

                    // Create connection
                      $conn = mysqli_connect($servername, $username, $password, $dbname);
                      // Check connection
                      if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                      }

                      
                      $Email = $_POST['email'];
                      

                    $sql = "INSERT INTO here( Email) VALUES('$Email')";

                    if (mysqli_query($conn, $sql)) {

                        echo "Done!";
                    }else{
                      echo "Error: ".mysqli_error();
                    }

                }

              ?>
              <input type="text" placeholder="Enter your email" name="email">
              <button type="submit" name="subscribe">
                subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="https://www.facebook.com/groups/fruits.sell.buy/?ref=share&mibextid=NSMWBT">
                <img src="images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="https://x.com/fruits_veggies?lang=en">
                <img src="images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="https://ng.linkedin.com/company/fresh-fruits-company?trk=public_profile_experience-item_profile-section-card_subtitle-click">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="https://www.instagram.com/freshfruitscompany/reels/">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  
  <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved. Design by Nkpecha Onyeka
      
    </p>
  </section>
  

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>