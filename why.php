<?php
session_start(); // Start session to access $_SESSION variables

// Check if the username is set in the session
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $loggedIn = true; // Flag to indicate user is logged in
} else {
    $loggedIn = false; // User is not logged in
}

?>




<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Mzansi Wethu </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              Mzansi Wethu
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About</a>
              </li>
              <?php
              // Conditionally display the service link based on login status
            if($loggedIn) {
                echo '<li class="nav-item">
                        <a class="nav-link" href="sevice.php">Services</a>
                      </li>';
            } else {
                echo '<li class="nav-item">
                        <a class="nav-link" href="signup.php">Services</a>
                      </li>';
            }
            ?>
              <li class="nav-item active">
                <a class="nav-link" href="why.php">Why Us <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team.php">Team</a>
              </li>
              <?php
            // Conditionally display the Login link based on login status
            if($loggedIn) {
                echo '<li class="nav-item">
                        <a class="nav-link" href="logout.php">Log out, ' . $username . '</a>
                      </li>';
            } else {
                echo '<li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                      </li>';
            }
            ?>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- why section -->

  <section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Why Choose <span>Us</span>
        </h2>
      </div>
      <div class="why_container">
        <div class="box">
          <div class="img-box">
            <img src="images/w1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Empowering Civic Engagement and Accountability:
            </h5>
            <p>
              Mzansi Wethu addresses a significant gap in local governance by providing a platform that empowers citizens to hold their local governments accountable outside of traditional voting cycles. 
              By facilitating real-time reporting of issues, especially related to infrastructure, the app ensures that citizens can actively participate in governance and see their concerns addressed promptly.
              This proactive approach fosters a more engaged and responsible citizenry, leading to better governance and community development.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              User-Friendly and Accessible Technology:
            </h5>
            <p>
              The Mzansi Wethu web app is designed with simplicity and accessibility in mind, making it easy for users of all literacy levels to navigate and utilize. 
              The app uses clear language and visual cues to convey complex governmental information, ensuring that all citizens, regardless of their educational background, can understand and engage with the content. 
              This focus on user-friendly design promotes inclusivity and broadens the app's reach and impact.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Cost-Effective and Scalable Technological Solutions:
            </h5>
            <p>
              Utilizing a well-established technology stack, including HTML, CSS, JavaScript for the front end, and MySQL Workbench, PostgreSQL for the database, Mzansi Wethu is both cost-effective and scalable. 
              The integration of the Google Maps API enhances user experience by allowing easy reporting and location tracking of community issues. 
              These technological choices ensure that the app can grow and adapt to increasing user demands and potential expansions into other regions facing similar governance challenges.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w4.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Strategic Collaborations and Zero-Rated Access:
            </h5>
            <p>
              Mzansi Wethu offers unique collaboration opportunities with governments, non-profits, communities, and journalists, ensuring the solution's sustainability and success. 
              These partnerships align with shared goals of improving governance and civic participation. Additionally, the app's zero-rated feature, which allows users to access the app without data charges, significantly enhances its accessibility, especially in a country where data costs are high. 
              This feature ensures that even the most economically disadvantaged citizens can benefit from the app's functionalities, promoting wider civic engagement and community improvement.
            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>

  <!-- end why section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              if you have any queries, questions or concerns, feel free to reach out to us on any of our platforms. 
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.php">
                Home
              </a>
              <a class="" href="about.php">
                About
              </a>
              <a class="" href="service.php">
                Services
              </a>
              <a class="" href="why.php">
                Why Us
              </a>
              <a class="" href="team.php">
                Team
              </a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="">Mzansi Wethu Collaborators</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>