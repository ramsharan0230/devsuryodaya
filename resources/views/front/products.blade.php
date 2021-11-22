@extends('layouts.front-master')
@section('title', 'Blogs')
@section('styles')
<style>
    .ArticleBody{
    font-weight:bold
}
</style>

@endsection
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Products</h2>
            <ol>
              <li><a href="{{ route('home') }}">Home</a></li>
              <li>Products</li>
            </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Catalog Download ======= -->
    <section id="catlog-section" class="catlog-section">
      <div class="container">

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="hovereffect">
                <img class="img-responsive" src="assets/img/features-1.png" alt="">
                <div class="overlay">
                   <h2>Product 01</h2>
                   <a class="info" href="product.php">Know More</a>
                </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="hovereffect">
                <img class="img-responsive" src="assets/img/features-2.png" alt="">
                <div class="overlay">
                   <h2>Product 02</h2>
                   <a class="info" href="product.php">Know More</a>
                </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="hovereffect">
                <img class="img-responsive" src="assets/img/features-3.png" alt="">
                <div class="overlay">
                   <h2>Product 03</h2>
                   <a class="info" href="product.php">Know More</a>
                </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="hovereffect">
                <img class="img-responsive" src="assets/img/features-4.png" alt="">
                <div class="overlay">
                   <h2>Product 04</h2>
                   <a class="info" href="product.php">Know More</a>
                </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- Catalog Download -->


  </main><!-- End #main -->
@endsection
