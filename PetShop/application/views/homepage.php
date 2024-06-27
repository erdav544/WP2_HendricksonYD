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
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>Piuse</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/templates/piuse_html/piuse/'); ?>css/bootstrap.css" />
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />


  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/templates/piuse_html/piuse/'); ?>css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?= base_url('assets/templates/piuse_html/piuse/'); ?>css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area ">
    <div class="hero_bg_box">
      <img src="<?= base_url('assets/templates/piuse_html/piuse/'); ?>images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="<?= base_url() ?>">
            <span>
              Adit PetShop
            </span>
          </a>
          <div class="" id="">
            <!--
            <div class="User_option">
              <form class="form-inline my-2  mb-3 mb-lg-0">
                <input type="search" placeholder="Search" />
                <button class="btn   my-sm-0 nav_search-btn" type="submit"> <i class="fa fa-search" aria-hidden="true"></i> </button>
              </form>
            </div>
            -->

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="<?= base_url(); ?>">Home</a>
                <a href="<?= base_url('pages/about'); ?>">About</a>
                <a href="<?= base_url('pages/service'); ?>">Service</a>
                <a href="<?= base_url('pages/contact'); ?>">Contact</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <div class="detail-box">
              <h1>
                Where Furriends <br> Become Family!
              </h1>
              <p>
                At Adit Petshop, we invite you to step into a whimsical world where furriends become family. 🐾
              </p>
              <a href="#start_body" class="cta">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <div class="main_content">
    <div class="main_content_bg">
      <img src="<?= base_url('assets/templates/piuse_html/piuse/'); ?>images/content-bg.jpg" alt="">
    </div>

    <!-- service section -->

    <section class="service_section layout_padding" id="start_body">
      <div class="container py_mobile_45">
        <div class="heading_container heading_center">
          <h2> Our Services </h2>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="<?= base_url('assets/templates/piuse_html/piuse/'); ?>images/s1.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Pet Grooming
                </h5>
                <p>
                  Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="<?= base_url('assets/templates/piuse_html/piuse/'); ?>images/s2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Pet Checkup
                </h5>
                <p>
                  Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="<?= base_url('assets/templates/piuse_html/piuse/'); ?>images/s3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Dental Care
                </h5>
                <p>
                  Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a href="<?= base_url('pages/service'); ?>">
            Read More
          </a>
        </div>
      </div>
    </section>

    <!-- end service section -->

    <!-- about section -->

    <section class="about_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="img-box">
              <img src="<?= base_url('assets/templates/piuse_html/piuse/'); ?>images/about-img.jpg" alt="" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  About Us
                </h2>
              </div>
              <p>
                Minima cupiditate fuga animi unde nesciunt esse, voluptas vitae culpa ut impedit quae, totam eum in quis non velit! Aliquid libero voluptas quisquam magnam porro hic atque at numquam vel.
                Veritatis, magni deleniti optio quod quo nisi repellat quasi quia.
              </p>
              <a href="<?= base_url('pages/about'); ?>">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end about section -->

    <!-- care section -->

    <section class="care_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Best Care For Your Pets
                </h2>
              </div>
              <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like
              </p>
              <a href="<?= base_url('pages/contact'); ?>">
                Contact Us
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <img src="<?= base_url('assets/templates/piuse_html/piuse/'); ?>images/care.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end care section -->

    <!-- client section -->
    <section class="client_section">
      <div class="container">
        <div class="heading_container">
          <h2>
            Testimonial
          </h2>
        </div>
        <div class="carousel-wrap ">
          <div class="owl-carousel">
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="<?= base_url('assets/templates/piuse_html/piuse/'); ?>images/c1.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Zoya Hawk <br>
                    <span>
                      Pet Owner
                    </span>
                  </h5>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                  <p>
                    Dipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="<?= base_url('assets/templates/piuse_html/piuse/'); ?>images/c2.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Ryan Jonson <br>
                    <span>
                      Pet Owner
                    </span>
                  </h5>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                  <p>
                    Dipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end client section -->


    <!-- contact section -->

    <section class="contact_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>
            Request A Call back
          </h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form_container">
              <form onsubmit="return false">
                <div>
                  <input type="text" placeholder="Full Name " />
                </div>
                <div>
                  <input type="email" placeholder="Email" />
                </div>
                <div>
                  <input type="text" placeholder="Phone number" />
                </div>
                <div>
                  <input type="text" class="message-box" placeholder="Message" />
                </div>
                <div class="d-flex ">
                  <button>
                    SEND
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="map_container">
              <div class="map">
                <div id="googleMap"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end contact section -->
  </div>

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 ">
            <h6>
              About
            </h6>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority havThere are many variations of passages of Lorem Ipsum available, but the majority hav </p>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <h6>
              Useful Link
            </h6>
            <div class="info_link-box">
              <ul>
                <li class="active">
                  <a href="<?= base_url(); ?>">
                    Home
                  </a>
                </li>
                <li>
                  <a href="<?= base_url('pages/about'); ?>">
                    About
                  </a>
                </li>
                <li>
                  <a href="<?= base_url('pages/service'); ?>">
                    Service
                  </a>
                </li>
                <li>
                  <a href="<?= base_url('pages/contact'); ?>">
                    Contact
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <h6>
              Address
            </h6>
            <div class="contact_items">
              <a href="javascript:void(0)">
                <div class="item ">
                  <div class="img-box ">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </div>
                  <div class="detail-box">
                    <p>
                      Earth
                    </p>
                  </div>
                </div>
              </a>
              <a href="javascript:void(0)">
                <div class="item ">
                  <div class="img-box ">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <div class="detail-box">
                    <p>
                      Call +01 1234567890
                    </p>
                  </div>
                </div>
              </a>
              <a href="javascript:void(0)">
                <div class="item ">
                  <div class="img-box ">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                  </div>
                  <div class="detail-box">
                    <p>
                      demo-email@example.com
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <div class="info_form ">
              <h5>
                Newsletter
              </h5>
              <form onsubmit="return false">
                <input type="email" placeholder="Enter your email">
                <button>
                  Subscribe
                </button>
              </form>
              <div class="social_box">
                <a href="javascript:void(0)">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <footer class="container-fluid footer_section ">
    <p>
      &copy; <span id="displayDate"></span> All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </footer>
  <!-- end  footer section -->

  <script src="<?= base_url('assets/templates/piuse_html/piuse/'); ?>js/jquery-3.4.1.min.js"></script>
  <script src="<?= base_url('assets/templates/piuse_html/piuse/'); ?>js/bootstrap.js"></script>
  <!-- End Google Map -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="<?= base_url('assets/templates/piuse_html/piuse/'); ?>js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>

</body>

</html>