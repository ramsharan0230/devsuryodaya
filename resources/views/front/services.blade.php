@extends('layouts.front-master')
@section('title', 'Services')
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
            <h2>Services</h2>
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>Services</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>Our <strong>Services</strong></h2>
          </div>
          <div class="row">

            @foreach ($services as $service)
            <div class="col-lg-4 col-md-6">
                <div class="icon-box" data-aos="fade-up">
                  <div class="icon"><i class="bi bi-briefcase"></i></div>
                  <a href="{{ route('service-detail', $service->slug)}}"><img src="{{ asset('images/service').'/'.$service->image }}"></a>
                  <h4 class="title"><a href="{{ route('service-detail', $service->slug)}}">{{ $service->title }}</a></h4>
                  <p class="ArticleBody">{{ substr(strip_tags($service->description), 0, 100) }}
                    {{ strlen(strip_tags($service->description)) > 50 ? "...ReadMore" : "" }} 
                </p>
                </div>
            </div>
            @endforeach
            
          </div>
  
        </div>
    </section><!-- End Services Section -->
</main>
@endsection