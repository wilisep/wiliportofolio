<!doctype html>
<html lang="en">
  <head>
    <title>Wili Portofolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
          
          <div class="">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#services-section" class="nav-link">Hobi</a></li>
                <li><a href="#about-section" class="nav-link">Tentang</a></li>
              </ul>
            </nav>
          </div>

          <div class=" text-center mx-5">
            <h1 class="m-0 site-logo"><a href="#home-section">WL</a></h1>
          </div>

          <div class="text-left">

            <nav class="site-navigation position-relative" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#portfolio-section" class="nav-link">Photography</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>
            </nav>


            <div class="d-inline-block d-lg-none" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>


    <div class="site-blocks-cover overlay bg-light" id="home-section">

      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
            <div class="row">
              <div class="col-lg-6">
                <h1 class="text-white"><?= esc($about['name']) ?></h1>
                <p class="text-secondary"><?= esc($about['desc']) ?></p>
                <p class="lead"><?= esc($about['detail']) ?></p>
                <p><a href="#contact-section" class="btn smoothscroll btn-primary">Hubungi Saya</a></p>
              </div>
            </div>
          </div>
            
        </div>
      </div>

      <img src="images/wil.png" alt="Image" class="img-face">
      
    </div>  

    <div class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Kesenangan</h2>
          </div>
    
          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-glass"></span></div>
              <div class="service-about">
                <h3>Fotografi</h3>
                <p>Saya senang menjelajah dan memotret hal unik yang saya temui, terutama suasana hutan tropis.</p>
              </div>
            </div>
          </div>
    
          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-video-camera"></span></div>
              <div class="service-about">
                <h3>Videografi</h3>
                <p>Selain hobi memotret saya juga kerap membuat video pendek untuk mengabadikan momen.</p>
              </div>
            </div>
          </div>
    
          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-fire"></span></div>
              <div class="service-about">
                <h3>Coding</h3>
                <p>Saya memiliki ketertarikan membuat program website dengan bahasa pemrograman tingkat menengah.</p>
              </div>
            </div>
          </div>
    
          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-magnet"></span></div>
              <div class="service-about">
                <h3>Traveling</h3>
                <p>Saya suka bepergian dan memiliki mimpi untuk dapat mengunjungi banyak tempat wisata unik di penjuru dunia.</p>
              </div>
            </div>
          </div>
    
        </div>
      </div>
    </div>

    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-4 position-relative">
            <h2 class="section-title">Tentang Saya</h2>
          </div>
          <div class="col-lg-6 order-2 order-lg-1">
            <img class="img-fluid mb-4" src="images/wilii.jpg" alt="Image">
          </div>
          <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <div class="mb-5">
              <strong class="text-black">Photographer</strong>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                  style="width: 89%;">
                  <span>89%</span>
                </div>
              </div>
            </div>
            <div class="mb-5">
              <strong class="text-black">Videografi</strong>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                  style="width: 75%;">
                  <span>75%</span>
                </div>
              </div>
            </div>
            <div class="mb-5">
              <strong class="text-black">Coding</strong>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                  style="width: 94%;">
                  <span>94%</span>
                </div>
              </div>
            </div>
            <div class="mb-5">
              <strong class="text-black">Traveling</strong>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                  style="width: 94%;">
                  <span>94%</span>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>


    

    <section class="site-section block__62272" id="portfolio-section">
      

      <div class="container">
        <div class="row mb-5">
          <div class="col-12 position-relative">
            <h2 class="section-title text-center mb-5">My Photography</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 item">
            <a href="images/img_1.jpg" class="item-wrap fancybox mb-4">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_1.jpg">
            </a>
            <a href="images/img_2.jpg" class="item-wrap fancybox mb-4">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_2.jpg">
            </a>
          </div>

          <div class="col-md-6 col-lg-4 item">            
            <a href="images/img_5.jpg" class="item-wrap fancybox mb-4">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_5.jpg">
            </a>
            <a href="images/img_8.jpg" class="item-wrap fancybox mb-4">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_8.jpg">
            </a>
          </div>
          <div class="col-md-6 col-lg-4 item">
            <a href="images/img_6.jpg" class="item-wrap fancybox mb-4">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_6.jpg">
            </a>
            <a href="images/img_7.jpg" class="item-wrap fancybox mb-4">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_7.jpg">
            </a>
          </div>
        </div>

        
      </div>

    </section>

    <section class="site-section bg-primary" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center text-white mb-5">Say Hello</h2>
          </div>
        </div>
        <form action="#" class="form">
          <div class="row mb-4">
            <div class="form-group col-6">
              <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="form-group col-6">
              <input type="text" class="form-control" placeholder="Full name">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <input type="email" class="form-control" placeholder="Email address">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <input type="text" class="form-control" placeholder="Subject of the message">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Type your message here.."></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <input type="submit" class="btn btn-dark" value="Send Message">
            </div>
          </div>
          
        </form>
      </div>
    </section>

    <footer class="site-section bg-light footer">
      <div class="container">
        <div class="row mb-5">         
          <div class="col-md-5 mx-auto">
        <div class="row">
          <div class="col-12 text-center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p>Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved.</p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->          
          </div>
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  
  <script src="js/main.js"></script>

  
  </body>
</html>