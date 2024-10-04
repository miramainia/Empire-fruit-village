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
                  <a class="nav-link" href="fruit.php">FRUITS </a>
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

 

  <section class="client_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2>
         Customers Review
        </h2>
        <hr>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container layout_padding-top">
              <div class="img-box">
                <img src="images/client-img.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  John Mark
                </h5>
                <p>
                  <img src="images/left-quote.png" alt="">
                  <span>
                    Fruit Village is the best place to order fruits online. 
                  </span>
                  <img src="images/right-quote.png" alt=""> <br>
                  They deliver and make sure your order is correct before leaving. make them your fruit 
                  plug and you will not regret you did. trust me, they are tested. your number one fruit basket. 
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding-top">
              <div class="img-box">
                <img src="images/girl.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Precious Claire
                </h5>
                <p>
                  <img src="images/left-quote.png" alt="">
                  <span>
                    Empire Fruit Village is a good,
                  </span>
                  <img src="images/right-quote.png" alt=""> <br>
                  place to get your fruits aspecially if you want them fresh. I can think of no other place when it comes to fruits.
                  not only have i been using them here in Lagos, i also discorvered they have 
                  a branch in portharcourt and other states.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding-top">
              <div class="img-box">
                <img src="images/client.Jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Paul Major
                </h5>
                <p>
                  <img src="images/left-quote.png" alt="">
                  <span>
                    Let the joy of ordering,
                  </span>
                  <img src="images/right-quote.png" alt=""> <br>
                  Fruits from Empire Fruit Village be with you, i have tried other fruit vendors but over and over again, fruit villa
                  has proven to be the best among the best. they deliver without problems
                  but hey dont take my word for it. a trial will convince you.
                </p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
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
                126 Eagle Square Plaza, Asaba Delta State
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
                Empiredefruit@gmail.com
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
      &copy; <span id="displayYear"></span>  All Rights Reserved Designed By Nkpecha Onyeka 
    </p>
  </section>
  


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>