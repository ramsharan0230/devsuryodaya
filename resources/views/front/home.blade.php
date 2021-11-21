@extends('layouts.front-master')
@section('title', 'Home')

@section('content')
    <!-- ======= Hero Section ======= -->
    @include('front.includes.carousel')

  <main id="main">

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>We've created more than <span>200 Products</span> this year!</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Request a quote</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>About <strong>US</strong></h2>
        </div>
        <div class="row no-gutters">
          <div style="background-image: url(assets/img/about.jpg);" class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-aos="fade-up">Voluptatem dignissimos provident quasi</h3>
              <p data-aos="fade-up">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4>Corporis voluptates sit</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Ullamco laboris nisi</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4>Labore consequatur</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4>Beatae veritatis</h4>
                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Services</strong></h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <a href="service-detail.php"><img src="/assets/img/rs1.jpg"></a>
              <h4 class="title"><a href="service-detail.php">Service Sample Image title</a></h4>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Patient Room</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">Bath Safety</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="">Kids</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Latest Products Section ======= -->
    <section id="latest-products" class="latest-products">
      <div class="container">
       <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Latest Products</strong></h2>
          
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="latest-items aos-init aos-animate">
                    <a href="product-detail.php"> <img src="/front/assets/img/igo2.jpg"></a>
                    <h4 class="title"><a href="product-detail.php">iGo2</a></h4>
                    <strong>Protable Oxygen Concentrator</strong>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="latest-items aos-init aos-animate">
                    <a href="product-detail.php"> <img src="/front/assets/img/ifill1280.jpg"></a>
                    <h4 class="title"><a href="product-detail.php">iGo2</a></h4>
                    <strong>Protable Oxygen Concentrator</strong>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="latest-items aos-init aos-animate">
                    <a href="product-detail.php"> <img src="/front/assets/img/compact525.jpg"></a>
                    <h4 class="title"><a href="product-detail.php">iGo2</a></h4>
                    <strong>Protable Oxygen Concentrator</strong>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="latest-items aos-init aos-animate">
                    <a href="product-detail.php"> <img src="/front/assets/img/igo2.jpg"></a>
                    <h4 class="title"><a href="product-detail.php">iGo2</a></h4>
                    <strong>Protable Oxygen Concentrator</strong>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="latest-items aos-init aos-animate">
                    <a href="product-detail.php"> <img src="/front/assets/img/igo2.jpg"></a>
                    <h4 class="title"><a href="product-detail.php">iGo2</a></h4>
                    <strong>Protable Oxygen Concentrator</strong>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="latest-items aos-init aos-animate">
                    <a href="product-detail.php"> <img src="/front/assets/img/compact525.jpg"></a>
                    <h4 class="title"><a href="product-detail.php">iGo2</a></h4>
                    <strong>Protable Oxygen Concentrator</strong>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <i class="bi bi-caret-left"></i>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <i class="bi bi-caret-right"></i>
          </button>
        </div>

      </div>
    </section><!-- End  Latest Products Section -->

    <!-- ======= Our Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Clients</strong></h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Our Clients Section -->
    <!-- ======= Video Section ======= -->
    <section>
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Videos</strong></h2>
          
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></span>
                </button>        
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                  <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div id="exampleSlider">
           <div class="MS-content">
               <div class="item">
                   <iframe width="100%" height="315" src="https://www.youtube.com/embed/HRcJEtAuK48" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   <button class="video-btn" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/HRcJEtAuK48" data-bs-target="#myModal">
                   <i class="bi bi-play-circle-fill"></i>
                  </button>
               </div>
               <div class="item">
                   <iframe width="100%" padding-right="10px" height="315" src="https://www.youtube.com/embed/HRcJEtAuK48" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   <button class="video-btn" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/HRcJEtAuK48" data-bs-target="#myModal">
                   <i class="bi bi-play-circle-fill"></i>
                  </button>
               </div>
               <div class="item">
                   <iframe width="100%" padding-right="10px" height="315" src="https://www.youtube.com/embed/HRcJEtAuK48" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   <button class="video-btn" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/HRcJEtAuK48" data-bs-target="#myModal">
                   <i class="bi bi-play-circle-fill"></i>
                  </button>
               </div>
               <div class="item">
                   <iframe width="100%" padding-right="10px" height="315" src="https://www.youtube.com/embed/HRcJEtAuK48" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   <button class="video-btn" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/HRcJEtAuK48" data-bs-target="#myModal">
                   <i class="bi bi-play-circle-fill"></i>
                  </button>
               </div>
               <div class="item">
                   <iframe width="100%" padding-right="10px" height="315" src="https://www.youtube.com/embed/HRcJEtAuK48" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   <button class="video-btn" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/HRcJEtAuK48" data-bs-target="#myModal">
                   <i class="bi bi-play-circle-fill"></i>
                  </button>
               </div>
               <div class="item">
                   <iframe width="100%" padding-right="10px" height="315" src="https://www.youtube.com/embed/HRcJEtAuK48" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   <button class="video-btn" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/HRcJEtAuK48" data-bs-target="#myModal">
                   <i class="bi bi-play-circle-fill"></i>
                  </button>
               </div>
           </div>
           <div class="MS-controls">
               <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
               <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
           </div>
       </div>
      </div>
    </section>

    <!-- ======= End Video Section ======= -->

  </main><!-- End #main -->
@endsection