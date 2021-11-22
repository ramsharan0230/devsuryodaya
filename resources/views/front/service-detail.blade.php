
@extends('layouts.front-master')
@section('title', 'About Us')

@section('content')
<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Service Detail</h2>
          <ol>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Service Detail</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= service detail-section ======= -->
    <section id="oxygen-section" class="oxygen-section">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="items-detail " data-aos="fade-up">
               <img src="assets/img/igo2.jpg">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
            <div class="items-detail " data-aos="fade-up">
              <h2>{{ $service->title }}</h2>
              <strong>Protable Oxygen Concentrator</strong>
              <p class="description">The groundbreaking iGo2 Portable Oxygen Concentrator (POC) has created a new class of product – the auto-adjusting POC. This first-of-its-kind POC uses patented SmartDose Technology. Now you can enjoy life more freely without worrying about changing oxygen settings during activity. This gives you the peace of mind and the freedom you have been looking for.
              The groundbreaking iGo2 Portable Oxygen Concentrator (POC) has created a new class of product – the auto-adjusting POC. This first-of-its-kind POC uses patented SmartDose Technology. Now you can enjoy life more freely without worrying about changing oxygen settings during activity. This gives you the peace of mind and the freedom you have been looking for.
            The groundbreaking iGo2 Portable Oxygen Concentrator (POC) has created a new class of product – the auto-adjusting POC. This first-of-its-kind POC uses patented SmartDose Technology. Now you can enjoy life more freely without worrying about changing oxygen settings during activity. This gives you the peace of mind and the freedom you have been looking for.
            <br><br>
          This gives you the peace of mind and the freedom you have been looking for.
            The groundbreaking iGo2 Portable Oxygen Concentrator (POC) has created a new class of product – the auto-adjusting POC. This first-of-its-kind POC uses patented SmartDose Technology. Now you can enjoy life more freely without worrying about changing oxygen settings during activity. This gives you the peace of mind and the freedom you have been looking for.</p>
              
            </div>
          </div>
        </div>
      </div>
    </section><!-- service detail-section -->

     <!-- ======= Catalog Download ======= -->
    <section id="catlog-section" class="catlog-section">
      <div class="container">
        <div class="section-title aos-init aos-animate" data-aos="fade-up">
          <h2>Service Related Products</h2>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="product-box">
              <div class="hovereffect">
                  <img class="img-responsive" src="assets/img/rs1.jpg" alt="">
                  <div class="overlay">
                     <h2>Oxygen Tharapay</h2>
                     <a class="info" href="listing.php">Know More</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="product-box">
              <div class="hovereffect">
                <img class="img-responsive" src="assets/img/rs2.jpg" alt="">
                <div class="overlay">
                   <h2>Suction Therapy</h2>
                   <a class="info" href="listing.php">Know More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="product-box">
              <div class="hovereffect">
                <img class="img-responsive" src="assets/img/rs3.jpg" alt="">
                <div class="overlay">
                   <h2>Aerosal Tharapy</h2>
                   <a class="info" href="listing.php">Know More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="product-box">
              <div class="hovereffect">
                <img class="img-responsive" src="assets/img/rs4.jpg" alt="">
                <div class="overlay">
                   <h2>CPAP Tharapy</h2>
                   <a class="info" href="listing.php">Know More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- Catalog Download -->


  </main><!-- End #main -->
  @endsection