<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Furni Mart</title>
    <!-- START:: Styles -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}" />
    <!-- font awesome CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}" />
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/homebanner.css')}}">
    <!-- END:: Styles -->
  </head>
  <body>
    <!--START::Nav Section-->
    <header class="main_menu home_menu">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light">

              <a class="navbar-brand" href="index.html"><img src="{{asset('frontend/assets/images/logo.svg')}}" alt="logo" /></a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu_icon"><i  style="color: #78909c;" class="fas fa-bars"></i></span>
              </button>

              <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Shop
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                      <a class="dropdown-item" href="category.html">
                        shop category
                      </a>
                      <a class="dropdown-item" href="allproducts.html">
                        All Products
                      </a>
                      <a class="dropdown-item" href="single-product.html">
                        product details
                      </a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      pages
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                      <a class="dropdown-item" href="checkout.html">product checkout</a>
                      <a class="dropdown-item" href="cart.html">shopping cart</a>
                    </div>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                  </li>
                </ul>
              </div>
              <div class="hearer_icon d-flex">
                <a id="search_1" href="#"><i style="color: #78909c" class="fa-solid fa-magnifying-glass"></i></a>
                <a href="wishlist.html"><i style="color: #78909c" class="fa-regular fa-heart"></i></a>
                <a href="cart.html"><i style="color: #78909c" class="fas fa-cart-plus"></i></a>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <div class="search_input" id="search_input_box">
        <div class="container">
          <form class="d-flex justify-content-between search-inner">
            <input type="text" class="form-control" id="search_input" placeholder="Search Here"/>
            <button type="submit" class="btn"></button>
            <span id="close_search" title="Close Search">
              <i class="fa-solid fa-xmark"></i>
            </span>
          </form>
        </div>
      </div>
    </header>
    <!-- END::Nav Section-->

    <!-- banner part start-->
    <section class="mycrousel mb-3" style="color: #f8fbff;">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-12">
                  <div class="banner_slider owl-carousel">
                      <div class="single_banner_slider">
                          <div class="row">
                              <div class="col-lg-5 col-md-8">
                                  <div class="banner_text">
                                      <div class="banner_text_iner">
                                          <h1>Wood & Cloth Sofa</h1>
                                          <p class="mt-3">Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                          <a href="category.html" class="btn_3 mt-3">Shop Now</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="banner_img d-none d-lg-block">
                                  <img src="{{asset('frontend/assets/images/banner_img.png')}}" alt="">
                              </div>
                          </div>
                      </div>
                      <div class="single_banner_slider">
                          <div class="row">
                              <div class="col-lg-5 col-md-8">
                                  <div class="banner_text">
                                      <div class="banner_text_iner">
                                        <h1>Wood & Cloth Sofa</h1>
                                        <p class="mt-3">Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                          <a href="category.html" class="btn_3 mt-3">Shop Now</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="banner_img d-none d-lg-block">
                                  <img src="{{asset('frontend/assets/images/banner_img.png')}}" alt="">
                              </div>
                          </div>
                      </div>
                      <div class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                      <h1>Wood & Cloth Sofa</h1>
                                      <p class="mt-3">Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                        <a href="category.html" class="btn_3 mt-3">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block">
                                <img src="{{asset('frontend/assets/images/banner_img.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- banner part start-->

  <!-- START:: Sales -->
  <div class="owl-carousel px-3 mt-4">
    <div class="sales-carousel"> <img src="{{asset('frontend/assets/images/sale1.jpg')}}" alt="1"> </div>
    <div class="sales-carousel"> <img src="{{asset('frontend/assets/images/sale2.jpg')}}" alt="2"> </div>
    <div class="sales-carousel"> <img src="{{asset('frontend/assets/images/sale3.jpg')}}" alt="3"> </div>
  </div>

  <!-- END:: Sales -->
    <br>
    <!-- START:: Best Seller Product Slider -->
    <section class="product_list best_seller">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-12 mt-4">
                  <div class="section_tittle text-center">
                      <h2>Products</h2>
                  </div>
              </div>
          </div>
          <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">
                    <div class="single_product_item">
                        <a href="single-product.html"><img src="{{asset('frontend/assets/images/product/product_1.png')}}" alt=""></a>
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                      <a href="single-product.html"><img src="{{asset('frontend/assets/images/product/product_2.png')}}" alt=""></a>
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                      <a href="single-product.html"><img src="{{asset('frontend/assets/images/product/product_3.png')}}" alt=""></a>
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                      <a href="single-product.html"><img src="{{asset('frontend/assets/images/product/product_4.png')}}" alt=""></a>
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                      <a href="single-product.html"><img src="{{asset('frontend/assets/images/product/product_5.png')}}" alt=""></a>
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </section>
  <!-- END:: Best Seller Product Slider -->

  <!-- START:: Best Seller Product Slider -->
  <section class="product_list best_seller">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">
                    <div class="single_product_item">
                        <a href="single-product.html"><img src="{{asset('frontend/assets/images/product/product_1.png')}}" alt=""></a>
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                      <a href="single-product.html"><img src="{{asset('frontend/assets/images/product/product_2.png')}}" alt=""></a>
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                      <a href="single-product.html"><img src="{{asset('frontend/assets/images/product/product_3.png')}}" alt=""></a>
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                      <a href="single-product.html"><img src="{{asset('frontend/assets/images/product/product_4.png')}}" alt=""></a>
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                      <a href="single-product.html"><img src="{{asset('frontend/assets/images/product/product_5.png')}}" alt=""></a>
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
<!-- END:: Best Seller Product Slider -->

    <!-- START:: Shop by category -->
    <section class="feature_part padding_top">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="section_tittle text-center">
                      <h2>Shop By Category</h2>
                  </div>
              </div>
          </div>
          <div class="row align-items-center justify-content-between">
              <div class="col-lg-7 col-sm-6">
                  <div class="single_feature_post_text single_feature_post_first">
                      <p>Premium Quality</p>
                      <h3>Category Name</h3>
                      <a href="allproducts.html" class="feature_btn">Shop Now <i class="fas fa-play"></i></a>
                      <img src="{{asset('frontend/assets/images/feature/feature_1.png')}}" alt="">
                  </div>
              </div>
              <div class="col-lg-5 col-sm-6">
                  <div class="single_feature_post_text single_feature_post_scnd">
                      <p>Premium Quality</p>
                      <h3>Category Name</h3>
                      <a href="allproducts.html" class="feature_btn">Shop Now <i class="fas fa-play"></i></a>
                      <img src="{{asset('frontend/assets/images/feature/feature_2.png')}}" alt="">
                  </div>
              </div>
              <div class="col-lg-5 col-sm-6">
                  <div class="single_feature_post_text single_feature_post_scndlast">
                      <p>Premium Quality</p>
                      <h3>Category Name</h3>
                      <a href="allproducts.html" class="feature_btn">Shop Now <i class="fas fa-play"></i></a>
                      <img src="{{asset('frontend/assets/images/feature/feature_3.png')}}" alt="">
                  </div>
              </div>
              <div class="col-lg-7 col-sm-6">
                  <div class="single_feature_post_text single_feature_post_last">
                      <p>Premium Quality</p>
                      <h3>Category Name</h3>
                      <a href="allproducts.html" class="feature_btn">Shop Now <i class="fas fa-play"></i></a>
                      <img src="{{asset('frontend/assets/images/feature/feature_4.png')}}" alt="">
                  </div>
              </div>
          </div>
      </div>
    </section>
  <!-- END:: Shop by category -->

  <!-- START:: Sales Banner -->
  <section class="our_offer section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6">
                <div class="offer_img">
                    <img src="{{asset('frontend/assets/images/offer_img.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="offer_text">
                    <h2>Weekly Sale on 60% Off All Products</h2>

                    <div class="date_countdown">
                        <div id="timer">
                            <div id="days" class="date"></div>
                            <div id="hours" class="date"></div>
                            <div id="minutes" class="date"></div>
                            <div id="seconds" class="date"></div>
                        </div>
                    </div>

                    <div class="input-group newsletter-btn">
                        <div class="input-group-append">
                            <a href="shop.html" class="center_btn_2" id="basic-addon2">Shop Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- END:: Sales Banner -->

  <!-- START:: Connect With Us Section -->
  <section class="connect-withus-section">
    <div class="home-connect page-container">
      <h3>Connect with us!</h3>
      <div class="connections">
          <i class="connect-button fa-brands fa-square-facebook"></i>
          <i class="connect-button fa-brands fa-square-twitter"></i>
          <i class="connect-button fa-brands fa-google"></i>
          <i class="connect-button fa-brands fa-square-instagram"></i>
          <i class="connect-button fa-brands fa-square-pinterest"></i>
      </div>
    </div>
  </section>
  <!-- END:: Connect With Us Section -->

  <!-- START::Brands Section -->
<Section class="brands_section">
  <div class="u-layout-row">
    <div>
      <div>
        <img src="//images02.nicepage.com/a1389d7bc73adea1e1c1fb7e/b26eaa96084b5d63a1b8d98d/5.png" alt="" class="u-image u-image-contain u-image-default u-image-1">
      </div>
    </div>
    <div>
      <div>
        <img src="//images02.nicepage.com/a1389d7bc73adea1e1c1fb7e/303f208dbbed58b0ad91b352/3.png" alt="" class="u-image u-image-contain u-image-default u-image-2">
      </div>
    </div>
    <div>
      <div>
        <img src="//images02.nicepage.com/a1389d7bc73adea1e1c1fb7e/edcb21a5c3ce51d686ceb941/4.png" alt="" class="u-image u-image-contain u-image-default u-image-3">
      </div>
    </div>
    <div>
      <div>
        <img src="//images02.nicepage.com/a1389d7bc73adea1e1c1fb7e/f152870f5c9d5ab28268fb89/2.png" alt="" class="u-image u-image-contain u-image-default u-image-4">
      </div>
    </div>
    <div>
      <div>
        <img src="//images02.nicepage.com/a1389d7bc73adea1e1c1fb7e/8cf263ed39d95b719e7321a1/6.png" alt="" class="u-image u-image-contain u-image-default u-image-5">
      </div>
    </div>
  </div>
</Section>
<!-- END::Brands Section -->

    <!-- START:: News Letter -->
    <section class="subscribe_area">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-7">
                  <div class="subscribe_area_text text-center">
                      <h5>Join Our Newsletter</h5>
                      <h2>Subscribe to get Updated with new offers</h2>
                      <div class="input-group newsletter-container">
                          <input type="text" class="form-control newsletter-input" placeholder="enter email address" aria-label="Recipient's username" aria-describedby="basic-addon2" style="color: black;">
                          <div class="input-group-append newsletter-btn">
                              <a href="#" id="basic-addon2">Subscribe now</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <!-- END:: News Letter -->

    <!-- START:: Footer -->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single_footer_part">
                        <h4>Shop</h4>
                        <ul class="list-unstyled">
                            <li><a href="category.html">Shop Category</a></li>
                            <li><a href="allproducts.html">All Products</a></li>
                            <li><a href="single-product.html">Product Details</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single_footer_part">
                        <h4>Pages</h4>
                        <ul class="list-unstyled">
                            <li><a href="checkout.html">Product Checkout</a></li>
                            <li><a href="cart.html">Shoping Cart</a></li>
                            <li><a href="Faq.html">Faq</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single_footer_part">
                        <h4>Features</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Jobs</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="single_footer_part">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Guides</a></li>
                            <li><a href="">Research</a></li>
                            <li><a href="">Experts</a></li>
                            <li><a href="">Agencies</a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="copyright_text">
                            <P>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</P>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li><a href="#" class="single_social_icon fab fa-facebook-f"></a></li>
                                <li><a href="#" class="single_social_icon fab fa-twitter"></a></li>
                                <li><a href="#" class="single_social_icon fas fa-globe"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END:: Footer -->

    <!-- START:: JS -->
    <script src="{{asset('frontend/assets/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.validate.min.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous" ></script>

    <script>
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3,
                loop: false
            }
        }
    })
    </script>
    <!-- END:: JS -->
  </body>
</html>
