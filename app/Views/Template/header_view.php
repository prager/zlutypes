<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Žlutý pes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="/assets/vendor/swiper/swiper-bundle.min.css">
    <!-- Choices.js [Custom select]-->
    <link rel="stylesheet" href="/assets/vendor/choices.js/public/assets/styles/choices.css">
    <!-- Theme stylesheet-->
    <link rel="stylesheet" href="/assets/css/style.test.css" id="theme-stylesheet">    
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/assets/css/custom.css">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/apple-touch-icon-152x152.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="wide" id="all">
      <!-- Top bar-->
      <div class="top-bar py-2" id="topBar" style="background: #555">
        <div class="container px-lg-0 text-light py-1">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p class="mb-0 text-xs">&nbsp;</p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline d-block d-md-none mb-0">
                  <li class="list-inline-item"><a class="text-xs" href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a class="text-xs" href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item"><a class="text-xs text-uppercase fw-bold text-reset" href="#" data-bs-toggle="modal" data-bs-target="#login-modal"><i class="fas fa-door-open me-2"></i><span class="d-none d-md-inline-block">Sign In</span></a></li>
                </ul>
                <ul class="list-inline mb-0 ms-lg-4">
                  <li class="list-inline-item text-gray-600 m-0"><a class="text-xs social-link-hover" href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="list-inline-item text-gray-600 m-0"><a class="text-xs social-link-hover" href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                  <li class="list-inline-item text-gray-600 m-0"><a class="text-xs social-link-hover" href="#" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                  <li class="list-inline-item text-gray-600 m-0"><a class="text-xs social-link-hover" href="#" title="Email"><i class="fas fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->
      <!-- Login Modal-->
      <div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="login-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-uppercase" id="login-modalLabel">User Login</h4>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url() . 'index.php/login' ?>" method="post">
                <div class="form-group mb-3">
                  <input class="form-control" id="username" type="text" placeholder="Username">
                </div>
                <div class="form-group mb-3">
                  <input class="form-control" id="password" type="password" placeholder="Password">
                </div>
                <p class="text-center">
                  <button class="btn btn-outline-primary"><i class="fas fa-door-open"></i> Log in</button>
                </p>
              </form>
              <p class="text-center text-muted small">Not registered yet?</p>
              <p class="text-center text-muted small"><a href="<?php echo base_url() . 'index.php/register' ?>"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to extra features of this site!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
      <!-- Navbar Sticky-->
      <header class="nav-holder make-sticky">
        <div class="navbar navbar-light bg-white navbar-expand-lg py-0" id="navbar">
          <div class="container py-3 py-lg-0 px-lg-0">
            <!-- Navbar brand--><a class="navbar-brand" href="<?php echo base_url(); ?>"><img class="d-none d-lg-inline-block" src="assets/img/logo-pes.png" alt="Zluty Pes logo"></a><h1 style="color: white;">Zluty pes</h1>
            <!-- Navbar toggler-->
            <button class="navbar-toggler text-primary border-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navigationCollapse" aria-controls="navigationCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="sr-only">Toggle navigation</span><i class="fas fa-align-justify"></i></button>
            <!-- Collapsed Navigation    -->
            <div class="collapse navbar-collapse" id="navigationCollapse">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!-- homepage dropdown-->
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="hpDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                  <ul class="dropdown-menu" aria-labelledby="hpDropdown">
                    <li><a class="dropdown-item text-uppercase border-bottom active" href="index.html">Option 1: Default Page </a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="index2.html">Option 2: Application </a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="index3.html">Option 3: Startup </a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="index4.html">Option 4: Agency </a></li>
                    <!-- homepage submenu-->
                    <li class="dropdown-submenu dropend border-0 p-0"><a class="dropdown-item text-uppercase dropdown-submenu-toggle" href="#" role="button" aria-expanded="false">Dropdown link</a>
                      <ul class="dropdown-menu dropdown-submenu m-0">
                        <li><a class="dropdown-item text-uppercase border-bottom" href="">Action </a></li>
                        <li><a class="dropdown-item text-uppercase border-bottom" href="">Another action </a></li>
                        <li><a class="dropdown-item text-uppercase border-bottom" href="">Application </a></li>
                        <li><a class="dropdown-item text-uppercase border-bottom" href="">Something else here </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a class="nav-link" href="#">Add Link</a>
                <!-- megamenu [features]-->
                <li class="nav-item dropdown menu-large"><a class="nav-link dropdown-toggle" id="featuresMegamenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Features</a>
                  <ul class="dropdown-menu megamenu p-4" aria-labelledby="featuresMegamenu">
                    <li>
                      <div class="row">
                        <div class="col-lg-6"><img class="img-fluid d-none d-lg-block" src="assets/img/template-easy-customize.png" alt=""></div>
                        <div class="col-lg-3 col-md-6">
                          <h5 class="text-dark text-uppercase pb-2 border-bottom">Shortcodes</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="template-accordions.html">Accordions</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="template-alerts.html">Alerts</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="template-buttons.html">Buttons</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="template-content-boxes.html">Content boxes</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="template-blocks.html">Horizontal blocks</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="template-pagination.html">Pagination</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="template-tabs.html">Tabs</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="template-typography.html">Typography</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <h5 class="text-dark text-uppercase pb-2 border-bottom">Header variations</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="template-header-default.html">Default sticky header</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="template-header-nosticky.html">No sticky header</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="template-header-light.html">Light header</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- megamenu [portfolio]-->
                <li class="nav-item dropdown menu-large"><a class="nav-link dropdown-toggle" id="portfolioMegamenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
                  <ul class="dropdown-menu megamenu p-4" aria-labelledby="portfolioMegamenu">
                    <li>
                      <div class="row">
                        <div class="col-lg-6"><img class="img-fluid d-none d-lg-block" src="assets/img/template-homepage.png" alt=""></div>
                        <div class="col-lg-3 col-md-6">
                          <h5 class="text-dark text-uppercase pb-2 border-bottom">Portfolio</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="portfolio-2.html">2 columns</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="portfolio-no-space-2.html">2 columns with negative space</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="portfolio-3.html">3 columns</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="portfolio-no-space-3.html">3 columns with negative space</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="portfolio-4.html">4 columns</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="portfolio-no-space-4.html">4 columns with negative space</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="portfolio-detail.html">Portfolio - detail</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="portfolio-detail-2.html">Portfolio - detail 2</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <h5 class="text-dark text-uppercase pb-2 border-bottom">About</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="about.html">About us</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="team.html">Our team</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="team-member.html">Team member</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="services.html">Services</a></li>
                          </ul>
                          <h5 class="text-dark text-uppercase pb-2 border-bottom">Marketing</h5>
                          <ul class="list-unstyled">
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="packages.html">Packages</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- megamenu [all pages]-->
                <li class="nav-item dropdown menu-large"><a class="nav-link dropdown-toggle" id="allPagesMegamenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All pages</a>
                  <ul class="dropdown-menu megamenu p-4" aria-labelledby="allPagesMegamenu">
                    <li>
                      <div class="row">
                        <div class="col-md-6 col-lg-3">
                          <h5 class="text-dark text-uppercase pb-2 border-bottom">Home</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase active" href="index.html">Option 1: Default Page </a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="index2.html">Option 2: Application </a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="index3.html">Option 3: Startup </a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="index4.html">Option 4: Agency </a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="index5.html">Option 5: Portfolio </a></li>
                          </ul>
                          <h5 class="text-dark text-uppercase pb-2 border-bottom">About</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="about.html">About us</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="team.html">Our team</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="team-member.html">Team member</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="services.html">Services</a></li>
                          </ul>
                          <h5 class="text-dark text-uppercase pb-2 border-bottom">Marketing</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="packages.html">Packages</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5 class="text-dark text-uppercase pb-2 border-bottom">Portfolio</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="portfolio-2.html">2 columns</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="portfolio-no-space-2.html">2 columns with negative space</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="portfolio-3.html">3 columns</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="portfolio-no-space-3.html">3 columns with negative space</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="portfolio-4.html">4 columns</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="portfolio-no-space-4.html">4 columns with negative space</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="portfolio-detail.html">Portfolio - detail</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="portfolio-detail-2.html">Portfolio - detail 2</a></li>
                          </ul>
                          <h5 class="text-dark text-uppercase pb-2 border-bottom">User pages</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="customer-register.html">Register / login</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="customer-orders.html">Orders history</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="customer-order.html">Order history detail</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="customer-wishlist.html">Wishlist</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="customer-account.html">Customer account / change password</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5 class="text-dark text-uppercase pb-2 border-bottom">Shop</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="shop-category.html">Category - sidebar right</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="shop-category-left.html">Category - sidebar left</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="shop-category-full.html">Category - full width</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="shop-detail.html">Product detail</a></li>
                          </ul>
                          <h5 class="text-dark text-uppercase pb-2 border-bottom">Shop - order process</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="shop-basket.html">Shopping cart</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="shop-checkout1.html">Checkout - step 1</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="shop-checkout2.html">Checkout - step 2</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="shop-checkout3.html"> Checkout - step 3</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="shop-checkout4.html">Checkout - step 4</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5 class="text-dark text-uppercase pb-2 border-bottom">Contact</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="contact.html">Contact</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="contact2.html">Contact - version 2</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="contact3.html">Contact - version 3</a></li>
                          </ul>
                          <h5 class="text-dark text-uppercase pb-2 border-bottom">Pages</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="text.html">Text page</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="text-left.html">Text page - left sidebar</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="text-full.html">Text page - full width</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="faq.html"> FAQ</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="404.html">404 page</a></li>
                          </ul>
                          <h5 class="text-dark text-uppercase pb-2 border-bottom">Blog</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="blog.html">Blog listing big</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="blog-medium.html">Blog listing medium</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="blog-small.html">Blog listing small</a></li>
                            <li class="nav-item"><a class="nav-link-sub py-2 text-uppercase" href="blog-post.html">Blog Post</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- dropdown menu [contact]-->
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="contactMegamenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
                  <ul class="dropdown-menu dropdown-menu-end m-0" aria-labelledby="contactMegamenu">
                    <li><a class="dropdown-item text-uppercase border-bottom" href="contact.html">Contact option 1</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="contact2.html">Contact option 2</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="contact3.html">Contact option 3</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>