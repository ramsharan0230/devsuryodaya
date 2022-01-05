
@extends('layouts.front-master')
@section('title', $newsEvent->title)

@section('content')
<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>{{$newsEvent->title}}</h2>
          <ol>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>News Event Detail</li>
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
               <img src="{{ asset('images/news_event').'/'.$newsEvent->image }}">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
            <div class="items-detail " data-aos="fade-up">
              <h2>{{ $newsEvent->title }}</h2>
              <strong>{{$newsEvent->subtitle}} </strong>
              <div class="row">
                <div class="col-sm-12">
                  <span><i class="bi bi-person"></i> {{ $newsEvent->user->name }}</span>
                  <span>&nbsp;&nbsp; <i class="bi bi-clock"></i> {{ $newsEvent->created_at->format('d M, Y') }}</span>
                </div>
              </div>

              <p class="description">
                {!! $newsEvent->description !!}
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
          <h2>Related News & Events</h2>
        </div>
        <div class="row">

          @forelse ($reletedNewsEvents as $releted)
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
              <div class="product-box">
                <div class="hovereffect">
                    <img class="img-responsive" src="{{ asset('images/news_event').'/'.$releted->image }}" alt="{{$releted->title}}">
                    <div class="overlay">
                      <h2>{{ $releted->title }}</h2>
                      <a class="info" href="{{ route('news-event-detail', $releted->slug) }}">Know More</a>
                    </div>
                </div>
              </div>
            </div>
          @empty
              <p>No releted News or Event found. </p>
          @endforelse
          
        </div>
      </div>
    </section><!-- Catalog Download -->


  </main><!-- End #main -->
  @endsection