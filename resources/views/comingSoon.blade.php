<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <!-- Page Title -->
    <title>Akisan Tech Coming Soon</title>

    <!-- Meta Tags -->
    <meta name="description" content="akisan tech - awesome coming soon ">
    {{-- <meta name="keywords" content="mix_design, coming soon, under construction, template, landing page, portfolio, one page, responsive, html5, css3, creative, clean, agency, personal page">
    <meta name="author" content="mix_design"> --}}

    <!-- Viewport Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Favicon & Icons Start -->
    <link rel="icon" href="img/favicon/color-1/favicon.ico" sizes="any">
    <link rel="icon" href="img/favicon/color-1/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="img/favicon/color-1/apple-touch-icon.png">
    <link rel="manifest" href="img/favicon/color-1/manifest.webmanifest">
    <!-- Template Favicon & Icons End -->

    <!-- Facebook Metadata Start -->
    {{-- <meta property="og:image:height" content="1200">
    <meta property="og:image:width" content="1200">
    <meta property="og:title" content="Oomph - Coming Soon & Landing Page Template">
    <meta property="og:description" content="Oomph - awesome coming soon template to kick-start your project">
    <meta property="og:url" content="index.html">
    <meta property="og:image" content="img/favicon/og-image.jpg"> --}}
    <!-- Facebook Metadata End -->

    <!-- Template Styles Start -->
    <link rel="stylesheet" type="text/css" href="{{asset('coming-soon/css/loaders/loader-color-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('coming-soon/css/plugins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('coming-soon/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('coming-soon/css/colors/color-1.css')}}">
    <!-- Template Styles End -->

    <!-- Custom Browser Color Start -->
    <meta name="theme-color" content="#0c0426">
    <meta name="msapplication-navbutton-color" content="#0c0426">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0c0426">
    <!-- Custom Browser Color End -->
  </head>

  <body>

    <!-- Loader Start-->
    <div class="loader">
      <div class="loader__content">
        <div class="loader__logo fadeIn">
          <!-- Your Logo Here -->
          <img src="{{ asset('assets/images/logo/logos.png')}}" alt="akisan coming soon">
        </div>
      </div>
    </div>
    <!-- Loader End-->

    <!-- Navigation Start -->
    <nav id="menu" class="menu">
      <div class="menu__container">

        <!-- Navigation Close Button Start -->
        <a id="menu-close" class="section-close light" href="#0"><span></span></a>
        <!-- Navigation Close Button End -->

        <!-- Navigation Content Start -->
        <div class="menu__content fullheight">

          <!-- Menu List Start -->
          <ul class="navigation">
            <li class="light">
              <a href="{{url('/')}}">Home</a>
              <span>Nice to meet you</span>
            </li>
            <li class="light">
              <a   href="{{url('about-us')}}">About us</a>
              <span>The brand story</span>
            </li>
            
            <li class="light">
              <a  href="{{url('contact-us')}}">Contact</a>
              <span>Ready to go!</span>
            </li>
          </ul>
          <!-- Menu List End -->

          <!-- Menu Data Line Start -->
          <div class="dataline opacity-el opacity-el-1">
            <div class="container-fluid px-0">
              <div class="row gx-0">
                <div class="col-12 col-xl-6 text-align-left">
                  <ul class="socials-text light">
                    <li>
                      <a href="https://www.facebook.com/" target="_blank">Fb</a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/" target="_blank">In</a>
                    </li>
                    <li>
                      <a href="https://twitter.com/" target="_blank">Tw</a>
                    </li>
                  </ul>
                </div>
                <div class="col-12 col-xl-6 text-align-right">
                  <a class="email-link light" href="mailto:info@akisantech.com">info@akisantech.com</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Menu Data Line End -->

        </div>
        <!-- Navigation Content End -->

      </div>
    </nav>
    <!-- Navigation End -->


    <!-- Main Section Start -->
    <section id="main" class="main">
      <div class="container-fluid p-0 fullheight">
        <div class="row g-0 fullheight">

          <!-- Main Section Content Start -->
          <div class="col-12 col-xl-6 main__content">

            <!-- Main Header Start -->
            <div class="main__header">
              <div class="header__container">
                <div class="header__content">
                  <!-- logo -->
                  <div class="logo">
                    <img src="{{ asset('assets/images/logo/logo.png')}}">
                  </div>
                  <!-- menu trigger -->
                  <a href="#0" id="menu-trigger" class="menu-trigger"><span></span></a>
                </div>
              </div>
            </div>
            <!-- Main Header End -->

            <!-- Main Headline Start -->
            <div class="main__headline">
              <div class="headline__content">
                <span class="headline__subtitle light loading-el loading-el-1">Hello! We are</span>
                <h1 class="animated-headline light loading-el loading-el-2">
                  <span id="typed-strings">
                    <b>Product Solutions</b>
                    <b>IT Services</b>
                    <b>Business Solutions</b>
                  </span>
                  <span id="typed"></span>
                </h1>
                <p class="headline__text light loading-el loading-el-3">Our website is under construction, but we are ready to go!
                  We are preparing something amazing and exciting for you. Special surprise for our subscribers only
                </p>
                <div class="headline__btnholder loading-el loading-el-4">
                  <a href="#" class="btn btn-solid" id="notify-trigger">
                    <span class="btn-caption">Notify Me</span>
                  </a>
                </div>
              </div>
            </div>
            <!-- Main Headline End -->

            <!-- Notify Me Popup Start -->
            <div id="notify" class="notify dark">
              <div class="notify__container">

                <!-- Notify Me Close Button Start -->
                <a id="notify-close" class="section-close light" href="#0"><span></span></a>
                <!-- Notify Me Close Button End -->

                <!-- Notify Me Content Start -->
                <div class="notify__content">

                  <!-- Notify Me Headline Start -->
                  <div class="inner__container notify-width popup__headline">
                    <span class="popup__subtitle light transition-el transition-el-1">Stay in touch</span>
                    <p class="popup__title light transition-el transition-el-2">We are almost here</p>
                    <p class="popup__text light transition-el transition-el-3">Subscribe to our newsletter and we will send you a notification about the
                      launch of our brand new site.</p>
                  </div>
                  <!-- Notify Me Headline End -->

                  <!-- Notify Me Form Block Start -->
                  <div class="inner__container grid-block notify-width popup__form">
                    <div class="form-container">

                      <!-- Notify Me Reply Messages Start-->
                      <div class="reply-group subscription-ok">
                        <i class="fa-solid fa-circle-check reply-group__icon light"></i>
                        <p class="reply-group__title light">Done!</p>
                        <span class="reply-group__text light">Thanks for subscribing. We will send you a notification about the launch of our brand new website.</span>
                      </div>
                      <div class="reply-group subscription-error">
                        <i class="fa-solid fa-face-frown-open reply-group__icon light"></i>
                        <p class="reply-group__title light">Ooops!</p>
                        <span class="reply-group__text light">Something went wrong. Please try again later.</span>
                      </div>
                      <!-- Notify Me Reply Messages End-->

                      <!-- Notify Me Form Start-->
                      <form class="form form-light notify-form" id="notify-form">
                        <div class="container-fluid px-4">
                          <div class="row gx-5">
                            <div class="col-12">
                              <input class="margin-s transition-el transition-el-4" type="email" placeholder="Email Adress*" required>
                              <span class="inputs-description transition-el transition-el-4">*Required fields</span>
                              <button class="btn btn-solid transition-el transition-el-5" type="submit">
                                <span class="btn-caption">subscribe</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                      <!-- Notify Me Form End-->

                    </div>
                  </div>
                  <!-- Notify Me Form Block End -->

                </div>
                <!-- Notify Me Content Start -->

              </div>
            </div>
            <!-- Notify Me Popup End -->

            <!-- Main Socials Text Start -->
            <div class="main__dataline">
              <div class="container-fluid px-0">
                <div class="row gx-0">
                  <div class="col-12 col-xl-6 text-align-left">
                    <ul class="socials-text light">
                      <li>
                        <a href="https://www.facebook.com/" target="_blank">Fb</a>
                      </li>
                      <li>
                        <a href="https://www.instagram.com/" target="_blank">In</a>
                      </li>
                      <li>
                        <a href="https://twitter.com/" target="_blank">Tw</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-12 col-xl-6 text-align-right">
                    <a class="email-link light" href="mailto:info@akisantech.com">info@akisantech.com</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Main Socials Text End -->

          </div>
          <!-- Main Section Content End -->

          <!-- Main Section Media Start -->
          <div class="col-12 col-xl-6 main__media">

            <!-- Main Media Content Start -->
            <div class="mainmedia__container">
              <div class="mainmedia__content">

                <!-- Section Image Background Start -->
                <div class="mainmedia__image main-image-c1"></div>
                <!-- Section Image Background End -->

                <!-- Background Effects Start -->
                <!-- video background -->
                <div class="video-background">
                  <video id="main-video" preload="metadata" autoplay="autoplay" loop="loop" muted="muted" poster="{{asset('coming-soon/img/backgrounds/1080x1440-c1-bg-home.jpg')}}">
                    <source type="video/mp4" src="{{asset('coming-soon/video/video-1.mp4')}}">
                    <source type="video/webm" src="{{asset('coming-soon/video/video-1.webm')}}">
                    <source type="video/ogv" src="{{asset('coming-soon/video/video-1.ogv')}}">
                  </video>
                </div>
                <!-- Background Effects End -->

              </div>
            </div>
            <!-- Main Media Content End -->


          </div>
          <!-- Main Section Media End -->

        </div>
      </div>
    </section>
    <!-- Main Section End -->

    <!-- About Section Start -->
    <section id="about" class="inner about">
      <div class="container-fluid p-0 fullheight">
        <div class="row g-0 flex-xl-row-reverse fullheight">

          <!-- Section Content Start -->
          <div class="col-12 col-xl-6 inner__content">

            <!-- Section Close Button Start -->
            <a id="about-close" class="section-close" href="#0"><span></span></a>
            <!-- Section Close Button End -->

            <!-- Section Content Block Start -->
            <div class="inner__block bg-medium">

              <!-- Section Container - Section Title Start -->
              <div class="inner__container">
                <h2>About us</h2>
                <span class="section__subtitle">Just awesome template to start your new project

                </span>
                <p class="section__text">
                  About US
                  At AKISAN TECH, we're more than just a tech company. We're passionate about technology and its potential to transform the way we live and work. We believe in pushing the boundaries of what's possible, whether we're creating innovative products in-house or providing customized solutions for our clients.
                  Our team of experts specializes in product development, personalized software solutions, and reliable IT support. We work closely with you to understand your unique needs and challenges, and we use our expertise to create solutions that exceed your expectations. But we don't just stop there.
                  We also create cutting-edge products in-house for the public to use, leveraging our expertise to build solutions that make a real difference. Our products are designed to simplify your life, streamline your processes, and improve your overall experience. From mobile apps to desktop software, we're always exploring new and innovative ways to harness the power of technology for the greater good.
                  Choose AKISAN TECH for cutting-edge technology, personalized attention, and exceptional service. Let us help you take your business to the next level, or discover how our in-house products can make your life easier.
                  We look forward to partnering with you.
                  AKISAN TECH.
                </p>
              </div>
              <!-- Section Container - Section Title End -->

              <!-- Section Container - Skillbars Start -->
              <div class="inner__container">
                <!-- skillbar single item -->
                <div class="show-skillbar">
                  <div class="skillbar" data-percent="96">
                    <span class="skillbar-title">Products</span>
                    <p class="skillbar-bar"></p>
                    {{-- <span class="skill-bar-percent"></span> --}}
                  </div>
                </div>
                <!-- skillbar single item -->
                <div class="show-skillbar">
                  <div class="skillbar" data-percent="84">
                    <span class="skillbar-title">IT Services</span>
                    <p class="skillbar-bar"></p>
                    {{-- <span class="skill-bar-percent"></span> --}}
                  </div>
                </div>
                <!-- skillbar single item -->
                <div class="show-skillbar">
                  <div class="skillbar" data-percent="90">
                    <span class="skillbar-title">Business Solutions</span>
                    <p class="skillbar-bar"></p>
                    {{-- <span class="skill-bar-percent"></span> --}}
                  </div>
                </div>
               
              </div>
              <!-- Section Container - Skillbars End -->

            </div>
            <!-- Section Content Block End -->


          </div>
          <!-- Section Content End -->

          <!-- Section Media Start -->
          <div class="col-12 col-xl-6 inner__media">

            <!-- Section Media Content Start -->
            <div class="media__container">
              <div class="media__content">

                <!-- Section Image Background Start -->
                <div class="media__image about-image-c1"></div>
                <!-- Section Image Background End -->

              </div>
            </div>
            <!-- Section Media Content End -->

            <!-- Copyright Start -->
            <div class="media__copyright">
              <p class="additional-text light">Made with
                <i class="fa-solid fa-heart"></i>
                 by
                <a class="light" href="https://themeforest.net/user/mix_design" target="_blank">mix_design</a>
              </p>
            </div>
            <!-- Copyright End -->

          </div>
          <!-- Section Media End -->

        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Our Works Section Start -->
    <section id="works" class="inner works">
      <div class="container-fluid p-0 fullheight">
        <div class="row g-0 flex-xl-row-reverse fullheight">

          <!-- Section Content Start -->
          <div class="col-12 col-xl-6 inner__content">

            <!-- Section Close Button Start -->
            <a id="works-close" class="section-close" href="#0"><span></span></a>
            <!-- Section Close Button End -->

            <!-- Section Content Block Start -->
            <div class="inner__block bg-medium">

              <!-- Section Container - Section Title Start -->
              <div class="inner__container">
                <h2>Our works</h2>
                <span class="section__subtitle">Creative crew and latest projects</span>
                <p class="section__text">Be what you would seem to be – or, if you’d like it put more simply – never imagine yourself
                  not to be otherwise than what it might appear to others that what you were or might have been was not otherwise than
                  what you had been would have appeared to them to be otherwise.
                </p>
              </div>
              <!-- Section Container - Section Title End -->

            </div>
            <!-- Section Content Block End -->

            <!-- Section Content Block Start -->
            <div class="inner__block no-padding bg-light">

              <!-- Section Container - Gallery Start -->
              <div class="container-fluid p-0 gallery">
                <div class="row g-0 my-gallery" itemscope itemtype="http://schema.org/ImageGallery">

                  <!-- Works Gallery Single Item Start -->
                  <figure class="col-12 col-md-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                    <a href="img/works/900x1200-work-c1-1.jpg" data-image="img/works/900x1200-work-c1-1.jpg" class="works-link" itemprop="contentUrl" data-size="900x1200">
                      <img src="img/works/900x1200-work-c1-1.jpg" class="works-image" itemprop="thumbnail" alt="Image description" />
                    </a>
                    <figcaption class="works-description" itemprop="caption description">
                      <h4>Mobile App
                        <small>Creative</small>
                      </h4>
                      <p>Mauris porttitor lobortis ligula, quis molestie lorem scelerisque eu. Morbi aliquam enim odio,
                        a mollis ipsum tristique eu.
                      </p>
                    </figcaption>
                  </figure>
                  <!-- Works Gallery Single Item End -->

                  <!-- Works Gallery Single Item Start -->
                  <figure class="col-12 col-md-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                    <a href="img/works/900x1200-work-c1-2.jpg" class="works-link" data-image="img/works/900x1200-work-c1-2.jpg" itemprop="contentUrl" data-size="900x1200">
                      <img src="img/works/900x1200-work-c1-2.jpg" class="works-image" itemprop="thumbnail" alt="Image description" />
                    </a>
                    <figcaption class="works-description" itemprop="caption description">
                      <h4>New Fashion Brand
                        <small>Just stylish</small>
                      </h4>
                      <p>Mauris porttitor lobortis ligula, quis molestie lorem scelerisque eu. Morbi aliquam enim odio,
                        a mollis ipsum tristique eu.
                      </p>
                    </figcaption>
                  </figure>
                  <!-- Works Gallery Single Item End -->

                  <!-- Works Gallery Single Item Start -->
                  <figure class="col-12 col-md-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                    <a href="img/works/900x1200-work-c1-3.jpg" class="works-link" data-image="img/works/900x1200-work-c1-3.jpg" itemprop="contentUrl" data-size="900x1200">
                      <img src="img/works/900x1200-work-c1-3.jpg" class="works-image" itemprop="thumbnail" alt="Image description" />
                    </a>
                    <figcaption class="works-description" itemprop="caption description">
                      <h4>Showroom Opening
                        <small>Interior</small>
                      </h4>
                      <p>Mauris porttitor lobortis ligula, quis molestie lorem scelerisque eu. Morbi aliquam enim odio,
                        a mollis ipsum tristique eu.
                      </p>
                    </figcaption>
                  </figure>
                  <!-- Works Gallery Single Item End -->

                  <!-- Works Gallery Single Item Start -->
                  <figure class="col-12 col-md-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                    <a href="img/works/900x1200-work-c1-4.jpg" class="works-link" data-image="img/works/900x1200-work-c1-4.jpg" itemprop="contentUrl" data-size="900x1200">
                      <img src="img/works/900x1200-work-c1-4.jpg" class="works-image" itemprop="thumbnail" alt="Image description" />
                      <div class="overlay"></div>
                    </a>
                    <figcaption class="works-description" itemprop="caption description">
                      <h4>Hair Cosmetics
                        <small>Packaging</small>
                      </h4>
                      <p>Mauris porttitor lobortis ligula, quis molestie lorem scelerisque eu. Morbi aliquam enim odio,
                        a mollis ipsum tristique eu.
                      </p>
                    </figcaption>
                  </figure>
                  <!-- Works Gallery Single Item End -->

                </div>
              </div>
              <!-- Section Container - Gallery End -->

            </div>
            <!-- Section Content Block End -->

            <!-- Section Content Block Start -->
            <div class="inner__block bg-medium">

              <!-- Section Container - Subtitle Start -->
              <div class="inner__container">
                <h3>Professional team</h3>
                <span class="block__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                <p class="block__text">Phasellus elementum eu neque quis malesuada. Maecenas ornare, felis in viverra maximus,
                  eros felis ullamcorper sem, at mattis felis purus vel lectus.
                </p>
              </div>
              <!-- Section Container - Subtitle End -->

              <!-- Section Container - Team Start -->
              <div class="inner__container grid-block">
                <div class="container-fluid px-4">
                  <div class="row gx-5">
                    <!-- team item -->
                    <div class="col-12 col-md-6 team__item">
                      <img class="team__image" src="img/team/900x1200-team-1.jpg" alt="Oomph Team Image">
                      <h4 class="team__title">Jennifer Pineapple
                        <small>Graphic designer</small>
                      </h4>
                      <p class="team__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere massa.</p>
                      <ul class="team__socials">
                        <li>
                          <a href="https://www.facebook.com/" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                          </a>
                        </li>
                        <li>
                          <a href="https://www.instagram.com/" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                          </a>
                        </li>
                        <li>
                          <a href="https://twitter.com/" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                          </a>
                        </li>
                        <li>
                          <a href="https://dribbble.com/" target="_blank">
                            <i class="fa-brands fa-dribbble"></i>
                          </a>
                        </li>
                        <li>
                          <a href="https://www.tiktok.com/" target="_blank">
                            <i class="fa-brands fa-tiktok"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <!-- team item -->
                    <div class="col-12 col-md-6 team__item">
                      <img class="team__image" src="img/team/900x1200-team-2.jpg" alt="Oomph Team Image">
                      <h4 class="team__title">John Lemon
                        <small>Brand manager</small>
                      </h4>
                      <p class="team__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere massa.</p>
                      <ul class="team__socials">
                        <li>
                          <a href="https://www.facebook.com/" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                          </a>
                        </li>
                        <li>
                          <a href="https://www.instagram.com/" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                          </a>
                        </li>
                        <li>
                          <a href="https://twitter.com/" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                          </a>
                        </li>
                        <li>
                          <a href="https://dribbble.com/" target="_blank">
                            <i class="fa-brands fa-dribbble"></i>
                          </a>
                        </li>
                        <li>
                          <a href="https://www.tiktok.com/" target="_blank">
                            <i class="fa-brands fa-tiktok"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Section Container - Team End -->

            </div>
            <!-- Section Content Block End -->

          </div>
          <!-- Section Content End -->

          <!-- Section Media Start -->
          <div class="col-12 col-xl-6 inner__media">

            <!-- Section Media Content Start -->
            <div class="media__container">
              <div class="media__content">

                <!-- Section Image Background Start -->
                <div class="media__image works-image-c1"></div>
                <!-- Section Image Background End -->

              </div>
            </div>
            <!-- Section Media Content End -->

            <!-- Copyright Start -->
            <div class="media__copyright">
              <p class="additional-text light">Made with
                <i class="fa-solid fa-heart"></i>
                 by
                <a class="light" href="https://themeforest.net/user/mix_design" target="_blank">mix_design</a>
              </p>
            </div>
            <!-- Copyright End -->

          </div>
          <!-- Section Media End -->

        </div>
      </div>
    </section>
    <!-- Our Works Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="inner contact">
      <div class="container-fluid p-0 fullheight">
        <div class="row g-0 flex-xl-row-reverse fullheight">

          <!-- Section Content Start -->
          <div class="col-12 col-xl-6 inner__content">

            <!-- Section Close Button Start -->
            <a id="contact-close" class="section-close" href="#0"><span></span></a>
            <!-- Section Close Button End -->

            <!-- Section Content Block Start -->
            <div class="inner__block bg-medium">

              <!-- Section Container - Section Title Start -->
              <div class="inner__container">
                <h2>Contact</h2>
                <span class="section__subtitle">Welcome to our new office</span>
                <p class="section__text">Our website is under construction but we are ready to go!
                  You can
                  <a href="tel:+12127089400">call us</a>
                   or leave a request here. We are always glad to see you in our office from
                  <span>9:00</span>
                   to
                  <span>18:00</span>.
                </p>
              </div>
              <!-- Section Container - Section Title End -->

              <!-- Section Container - Contact Data Start -->
              <div class="inner__container grid-block">
                <div class="container-fluid px-4">
                  <div class="row gx-5">
                    <!-- contact data item -->
                    <div class="col-12 col-sm-6 contact-data__item">
                      <h5 class="contact-data__title">Location</h5>
                      <p class="contact-data__text">
                        11 West 53 Street
                        <br>New York, NY
                        <br>10019
                      </p>
                    </div>
                    <!-- contact data item -->
                    <div class="col-12 col-sm-6 contact-data__item">
                      <h5 class="contact-data__title">Follow us</h5>
                        <ul class="contact-data__socials">
                          <li>
                            <a href="https://www.facebook.com/" target="_blank">Facebook</a>
                          </li>
                          <li>
                            <a href="https://www.instagram.com/" target="_blank">Instagram</a>
                          </li>
                          <li>
                            <a href="https://twitter.com/" target="_blank">Twitter</a>
                          </li>
                        </ul>
                    </div>
                    <!-- contact data item -->
                    <div class="col-12 col-sm-6 contact-data__item">
                      <h5 class="contact-data__title">Phone</h5>
                      <p class="contact-data__text">
                        <a href="tel:+12127089400">+1 212-708-9400</a>
                      </p>
                    </div>
                    <!-- contact data item -->
                    <div class="col-12 col-sm-6 contact-data__item">
                      <h5 class="contact-data__title">Email</h5>
                      <p class="contact-data__text">
                        <a href="mailto:info@akisantech.com">info@akisantech.com</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Section Container - Contact Data End -->

            </div>
            <!-- Section Content Block End -->

            <!-- Section Content Block Start -->
            <div class="inner__block bg-dark">

              <!-- Section Container - Subtitle Start -->
              <div class="inner__container">
                <h3 class="light">Stay in touch</h3>
                <span class="block__subtitle light">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                <p class="block__text light">Want to know more about us, tell us about your project or just to say hello?
                  Drop us a line and we will get back as soon as possible.
                </p>
              </div>
              <!-- Section Container - Subtitle End -->

              <!-- Section Container - Contact Form Start -->
              <div class="inner__container grid-block">
                <div class="form-container">

                  <!-- Contact Form Reply Group Start -->
                  <div class="reply-group">
                    <i class="fa-solid fa-circle-check reply-group__icon light"></i>
                    <p class="reply-group__title light">Done!</p>
                    <span class="reply-group__text light">Thanks for your message. We will get back as soon as possible.</span>
                  </div>
                  <!-- Contact Form Reply Group End -->

                  <!-- Contact Form Start -->
                  <form class="form form-light contact-form" id="contact-form">
                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="Oomph - Coming Soon & Landing Page Template">
                    <input type="hidden" name="admin_email" value="support@mixdesign.club">
                    <input type="hidden" name="form_subject" value="Contact Form Message">
                    <!-- END Hidden Required Fields-->
                    <div class="container-fluid px-4">
                      <div class="row gx-5">
                        <div class="col-12 col-md-6">
                          <input type="text" name="Name" placeholder="Your Name*" required>
                        </div>
                        <div class="col-12 col-md-6">
                          <input type="text" name="Company" placeholder="Company Name">
                        </div>
                        <div class="col-12 col-md-6">
                          <input type="email" name="E-mail" placeholder="Email Adress*" required>
                        </div>
                        <div class="col-12 col-md-6">
                          <input type="tel" name="Phone" placeholder="Phone Number*" required>
                        </div>
                        <div class="col-12">
                          <textarea name="Message" placeholder="A Few Words*" required></textarea>
                        </div>
                        <div class="col-12">
                          <span class="inputs-description">*Required fields</span>
                          <button class="btn btn-solid" type="submit">
                            <span class="btn-caption">submit</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!-- Contact Form End  -->

                </div>
              </div>
              <!-- Section Container - Contact Form End -->

            </div>
            <!-- Section Content Block End -->

          </div>
          <!-- Section Content End -->

          <!-- Section Media Start -->
          <div class="col-12 col-xl-6 inner__media">

            <!-- Section Media Content Start -->
            <div class="media__container">
              <div class="media__content">

                <!-- Section Image Background Start -->
                <div class="media__image contact-image-c1"></div>
                <!-- Section Image Background End -->

                <!-- Google Map Start -->
                <div class="map">
                  <div id="google-map">
                    <div id="google-container"></div>
                    <div id="zoom-in">
                      <span class="btn-icon fa-solid fa-plus"></span>
                    </div>
                    <div id="zoom-out">
                      <span class="btn-icon fa-solid fa-minus"></span>
                    </div>
                  </div>
                </div>
                <!-- Google Map End -->

              </div>
            </div>
            <!-- Section Media Content End -->

            <!-- Copyright Start -->
            <div class="media__copyright">
              <p class="additional-text light">Made with
                <i class="fa-solid fa-heart"></i>
                 by
                <a class="light" href="https://themeforest.net/user/mix_design" target="_blank">mix_design</a>
              </p>
            </div>
            <!-- Copyright End -->

          </div>
          <!-- Section Media End -->

        </div>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

      <!-- Background of PhotoSwipe.
      It's a separate element, as animating opacity is faster than rgba(). -->
      <div class="pswp__bg"></div>

      <!-- Slides wrapper with overflow:hidden. -->
      <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

          <div class="pswp__top-bar">

            <!--  Controls are self-explanatory. Order can be changed. -->

            <div class="pswp__counter"></div>

            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

            <button class="pswp__button pswp__button--share" title="Share"></button>

            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

            <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
            <!-- element will get class pswp__preloader-active when preloader is running -->
            <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
            </div>
          </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

      </div>

    </div>

    <!-- Load Scripts Start -->
    <script src="{{asset('coming-soon/js/libs.min.js')}}"></script>
    <script src="{{asset('coming-soon/js/gallery-init.js')}}"></script>
    <script src="{{asset('coming-soon/js/custom.js')}}"></script>
    <script src="{{asset('coming-soon/js/maps/map-color-1.js')}}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNMDtmEsvSevM4ztfsbhLfLNZhKHCvWXk"></script> --}}
    <!-- Load Scripts End -->

  </body>

</html>
