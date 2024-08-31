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
  <link rel="shortcut icon" href="images/logo.png" type="">

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

  <style>
    .sound-icon {
      width: 40px;
      height: 40px;
      vertical-align: middle;
      margin-right: 8px;
    }
    .navbar-brand {
      display: flex;
      align-items: center;
    }
  </style>

</head>

<body>

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
            <img src="images/logo.png" alt=" " class="sound-icon">
            <span>
              Mzansi Wethu
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="why.php">Why Us</a>
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
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

  <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      Mzansi <br>
                      Wethu
                    </h1>
                    <p>
                      Mzansi Wethu empowers and promotes civic engagement and government accountability outside of traditional voting cycles which are inefficient in addressing immediate community concerns.                    </p>

                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/phone.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      Mzansi <br>
                      Wethu
                    </h1>
                    <p>
                      Local government (wards and municipalities) are the primary source of governance and are often responsibly for inadequate service delivery, lack of infrastructure and struggling communities.                    </p>
            
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/sa-fist.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      Mzansi <br>
                      Wethu
                    </h1>
                    <p>
                      Mzansi Wethu is addressing the need for accountability within local government and uses civic participation as a tool. Empowering citizens through technology.                   </p>
                  
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/girl-speaker.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Our <span>Services</span></h2>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="service-item text-center">
            <div class="img-box mb-3">
              <img src="images/location.png" alt="" class="img-fluid" style="max-width: 80px;">
            </div>
            </div>
            <h5 style="text-align: left;">Real-Time Issue Reporting</h5>
            <p style="text-align: left;">Easily report local issues, especially those related to infrastructure, directly from your phone. Use the app's intuitive interface to pinpoint problem locations and provide detailed descriptions, ensuring that your concerns are addressed promptly by local authorities.</p>
            </div>
        </div>
        <div class="col-md-3">
          <div class="service-item text-center">
            <div class="img-box mb-3">
              <img src="images/report.png" alt="" class="img-fluid" style="max-width: 80px;">
            </div>
            <h5 style="text-align: left;">2. Accessible Government Information            </h5>
            <p style="text-align: left;">Stay informed about your local government with clear and concise information on your representatives, their contact details, and the budgets allocated to your area. The app also provides easy-to-understand summaries of planned projects and their timelines, helping you stay updated on community developments.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="service-item text-center">
            <div class="img-box mb-3">
              <img src="images/info.png" alt="" class="img-fluid" style="max-width: 80px;">
            </div>
            <h5>Community Meeting Updates</h5>
            <p>Never miss an important community meeting again. The app provides detailed information on upcoming meetings, including agendas and locations. You can also access summaries of previous meetings, keeping you engaged and informed about local governance activities.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="service-item text-center">
            <div class="img-box mb-3">
              <img src="images/searchbar.png" alt="" class="img-fluid" style="max-width: 80px;">
            </div>
            <h5>Local News and Regulation Updates</h5>
            <p>Receive timely updates on new laws, regulations, and important local news. The app ensures that you are always in the loop about significant changes and developments in your community, allowing you to stay engaged and informed about what matters most to you.
            </p>
          </div>
        </div>
      </div>
      <div class="text-center mt-4"> 
        <?php
            // Conditionally display the Login link based on login status
            if($loggedIn) {
                echo '<a href="services.php" class="btn btn-primary">Access our services</a>';
            } else {
                echo '<a href="signup.php" class="btn btn-primary">Access our services</a>';
            }
            ?>
      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
          About <span>Us</span>
        </h2>
        <p>
          Empowering citizens through technology.
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/protest.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h3>
              We Are Mzansi Wethu
            </h3>
            <p>
              Local governance and service delivery lacks transparency and proactive accountability where issues can be rectified as they arise, and lack of role fulfilment and service delivery can be addressed and accounted for as it occurs. 
              Citizens feel disempowered and can only tangibly hold their local governments accountable every half a decade. 
              There is a need to empower and promote civic engagement and government accountability outside of traditional voting. 
              Mzansi Wethu addresses the demand for accountability in local government by utilising public involvement as a strategy.
            </p>
            <p>
              In addition to empowering people, Mzansi Wethu encourages government accountability and civic involvement outside of conventional election cycles, which are ineffective at resolving pressing local issues.
            </p>
            <div class="btn-box">
        <a href="about.php">
          Read More
        </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

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
              Mzansi Wethu addresses a significant gap in local governance by providing a platform that empowers citizens to hold their local governments accountable outside of traditional voting cycles. By facilitating real-time reporting of issues, especially related to infrastructure, the app ensures that citizens can actively participate in governance and see their concerns addressed promptly. This proactive approach fosters a more engaged and responsible citizenry, leading to better governance and community development.
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
              The Mzansi Wethu web app is designed for accessibility and inclusivity, ensuring all citizens can navigate and engage with complex governmental information using clear language and visual cues.            </p>
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
              Mzansi Wethu is a cost-effective and scalable app using HTML, CSS, JavaScript, MySQL Workbench, and PostgreSQL. It integrates Google Maps API for user experience and growth.            </p>
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
              Mzansi Wethu, a zero-rated app, collaborates with governments, non-profits, communities, and journalists to improve governance and civic participation. Its zero-rated feature ensures accessibility for economically disadvantaged citizens, promoting wider community improvement.            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="why.php">
          Read More
        </a>
          
      </div>
    </div>
  </section>

  <!-- end why section -->

  <!-- team section -->
  <section class="team_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2 class="">
          Our <span> Team</span>
        </h2>
      </div>

      <div class="team_container">
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="images/team-1.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Lathitha Beyile
                </h5>
                <p>
                  Backend developer
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="images/team-2.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Keabetswe Meela
                </h5>
                <p>
                  Frontend developer
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="images/team-3.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Sithokomele Nxumalo
                </h5>
                <p>
                  Backend developer
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end team section -->


  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          What says our <span>Customers</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/client1.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Nabeelah Muvhango
                      ⭐⭐⭐⭐⭐
                    </h6>
                    <p>
                      Khayelitsha. Western Cape
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Mzansi Wethu has truly empowered me as a citizen.
                  The app is incredibly easy to navigate, even for someone like me who is not very tech-savvy. 
                  I love how it simplifies complex government information into clear and understandable language. 
                  The reporting feature is a game-changer; I have already reported a few infrastructure issues in my community, and I have seen action being taken much faster than before. 
                  The zero-rated access is a huge bonus, as I can use the app without worrying about data costs. 
                  This app has made me feel more connected to my local government and confident that my voice matters.
                  Highly recommended for every South African!
                </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/client2.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Maesela Tshamahanzi
                      ⭐⭐⭐⭐⭐
                    </h6>
                    <p>
                      Alexandra. Gauteng
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Mzansi Wethu is a must-have app for anyone who cares about their community and wants to see real change.
                  The interface is intuitive and user-friendly, making it accessible to people of all ages and literacy levels.
                  I appreciate the thoughtful design that includes visual cues and simple language. 
                  The integration with Google Maps makes it easy to pinpoint and report issues in my area, 
                  and the regular updates on local government projects and meetings keep me informed. 
                  The zero-rated feature is particularly beneficial, ensuring that I can stay engaged without incurring additional data charges. 
                  This app is a powerful tool for promoting transparency and accountability in local governance. 
                  A big thank you to the Mzansi Wethu team for developing such an impactful solution!
                </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/client3.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Hilda Malinga
                      ⭐⭐⭐⭐⭐
                    </h6>
                    <p>
                      Bushbuckridge. Limpopo
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Mzansi Wethu is a brilliant initiative that bridges the gap between citizens and their local government. 
                  The apps reporting feature is straightforward and effective, allowing me to report issues and see them addressed promptly. 
                  The detailed information on local representatives and their contact details is incredibly helpful. 
                  I also love how the app provides updates on new laws and community developments, keeping me well-informed.
                  The use of SMS and WhatsApp for critical updates ensures that even those without constant internet access can stay connected. 
                  This app is a perfect example of how technology can be used to enhance civic engagement and accountability. 
                  Highly recommend it to all South Africans!
                </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/client4.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Moloantoa Van Vyk
                      ⭐⭐⭐⭐⭐
                    </h6>
                    <p>
                      Msinga. KwaZulu Natal
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Mzansi Wethu has transformed how I engage with my community and local government. 
                  The app's design is incredibly intuitive, making it easy to find information about my ward and report issues directly from my phone. 
                  I especially appreciate the feature that provides updates on community projects and local meetings. 
                  It's clear that the developers put a lot of thought into making this app user-friendly and accessible to everyone, regardless of their tech skills. 
                  The zero-rated access is a fantastic touch, allowing me to stay informed without worrying about data charges. 
                  This app is a vital tool for anyone looking to make a positive impact in their community.
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->


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
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Create an account or login to access our services
          </h4>
          <p>Already have an account? <a href="login.php">Log in</a></p>
          <p>Create an account <a href="signup.php">Sign up</a></p>
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