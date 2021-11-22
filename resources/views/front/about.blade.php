@extends('layouts.front-master')
@section('title', 'About Us')

@section('content')
    <!-- ======= About ======= -->
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>About US</h2>
              <ol>
                <li><a href="index.html">Home</a></li>
                <li>About US</li>
              </ol>
            </div>
    
          </div>
        </section><!-- End Breadcrumbs -->
    
        <section class="about-us-banner" style="background-image:linear-gradient(#251f1f87,#000000a1), url(assets/img/about-us.jpg);"></section>
    
        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
          <div class="container">
    
            <div class="row no-gutters">
              <div style="background-image: url({{asset('assets/img/about.jpg')}});" class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right"></div>
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
    
              <div class="col-xs-12 col-sm-12 col-xl-12">
                <div class="about-ld">
                  <h4>About Drive Suryodaya Healthcare</h4>
                  <p>Headquartered in Port Washington, New York, Drive DeVilbiss Healthcare manufactures a complete line of medical products, including mobility products, sleep and respiratory products, beds, bariatric products, wheelchairs, sleep surfaces and pressure prevention products, self-assist products, power operated wheelchairs, rehabilitation products, patient room equipment, personal care products and Mobility electrotherapy devices. Currently, the Company has corporate offices, manufacturing facilities and distribution facilities located throughout the United States, Canada, the United Kingdom, France, Germany, Romania, the Netherlands, China, Hong Kong, India and Australia. The Company markets its products to customers located throughout the United States, Canada, Mexico, Central and South America, Europe, the Middle East, Asia and Australia. For more information, www.drivemedical.com.</p>
                </div>
              </div>
            </div>
          </div>
        </section><!-- End About Us Section -->
    
        <section class="testimonials">
          <div class="container">
            <div class="section-title aos-init aos-animate" data-aos="fade-up">
              <h2>Our <strong>Testimonials</strong></h2>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                @foreach ($testimonials as $key=>$testimonial)
                <div class="carousel-item {{ $key==0?'active':''}}">
                    <div class="testimonial-item">
                      <img src="{{ asset('images/testimonial').'/'.$testimonial->image}}" class="testimonial-img" alt="">
                      <h3>{{ $testimonial->designation }}</h3>
                      <h4>{{ $testimonial->description }}</h4>
                      <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                    </div>
                </div>
                @endforeach
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </section>
    
    
    
      </main><!-- End #main -->
    <!-- End  -->
@endsection