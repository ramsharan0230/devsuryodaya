
@extends('layouts.front-master')
@section('title', 'Blog Detail')

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
               <img src="{{ asset('images/blog').'/'.$blog->image }}">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
            <div class="items-detail " data-aos="fade-up">
              <h2>{{ $blog->title }}</h2>
              <strong>{{$blog->title}}</strong>
              <p class="description">
                {!! $blog->description !!}
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </section><!-- service detail-section -->

     <!-- ======= Catalog Download ======= -->
    <section id="catlog-section" class="catlog-section">
      <div class="container">
        <div class="section-title aos-init aos-animate" data-aos="fade-up">
          <h2>Related blogs</h2>
        </div>
        <div class="row">

          @forelse ($reletedBlogs as $releted)
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
              <div class="product-box">
                <div class="hovereffect">
                    <img class="img-responsive" src="{{ asset('images/blog').'/'.$releted->image }}" alt="">
                    <div class="overlay">
                      <h2>{{ $releted->title }}</h2>
                      <a class="info" href="{{ route('blog-detail', $releted->slug) }}">Know More</a>
                    </div>
                </div>
              </div>
            </div>
          @empty
              <p>No releted blog found. </p>
          @endforelse
          
        </div>
      </div>
    </section><!-- Catalog Download -->


  </main><!-- End #main -->
  @endsection