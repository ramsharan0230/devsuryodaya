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
          <div style="background-image: url({{ asset('images/main').'/'.$about->main_image }})" class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-aos="fade-up">{{ $about->title }}</h3>
              <p data-aos="fade-up">
                {{ $about->short_description }}
              </p>
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4>{{ $about->first_icon_title }}</h4>
                  <p>{{ $about->first_icon_description }}</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4>{{ $about->second_icon_title }}</h4>
                  <p>{{ $about->second_icon_description }}</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4>{{ $about->third_icon_title }}</h4>
                  <p>{{ $about->third_icon_description }}</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4>{{ $about->fourth_icon_title }}</h4>
                  <p>{{ $about->fourth_icon_description }}</p>
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
          @forelse ($mainServices as $service)
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <a href="{{ route('service-detail', $service->slug ) }}"><img src="{{ asset('images/service').'/'.$service->image }}"></a>
              <h4 class="title"><a href="{{ route('service-detail', $service->slug )}}">{{ $service->title }}</a></h4>
            </div>
          </div>
          @empty
              <!-- <p>No service found</p> -->
          @endforelse
          
          
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
            @forelse ($mainProducts as $key=>$item)
            <div class="carousel-item {{ $key==0?"active":""}}">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="latest-items aos-init aos-animate">
                    <a href="{{ route('product-detail', $item->slug) }}"> <img src="{{ asset('images/product').'/'.$item->image }}"></a>
                    <h4 class="title"><a href="{{ route('product-detail', $item->slug) }}">{{ $item->title }}</a></h4>
                    <strong>{{ $item->title }}</strong>
                    <p class="description">
                      {{ $item->short_description }}
                    </p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="latest-items aos-init aos-animate">
                    <a href="{{ route('service-detail', $item->slug) }}"> <img src="/front/assets/img/ifill1280.jpg"></a>
                    <h4 class="title"><a href="{{ route('service-detail', $item->slug) }}">{{ $item->subtitle }}</a></h4>
                    <strong>{{ $item->title }}</strong>
                    <p class="description">
                      {{ $item->short_description }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
            @empty
                
            @endforelse
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
        @include('front.includes.videos')
      </div>
    </section>

    <!-- ======= End Video Section ======= -->

  </main><!-- End #main -->
  @endsection