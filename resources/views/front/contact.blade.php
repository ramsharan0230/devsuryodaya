@extends('layouts.front-master')
@section('title', 'Contact Us')
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
          <h2>Contact</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
      
      <iframe src="{{$siteSettings->map}}"style="border:0; width: 100%; height: 350px;" frameborder="0" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

            <div class="col-lg-10">
              <div class="info-wrap">
                <div class="row">
                  <div class="col-lg-4 info">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>{{ $siteSettings->address }}<br>
                    {{ $siteSettings->location }}</p>
  
                  </div>
  
                  <div class="col-lg-4 info mt-4 mt-lg-0">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>{{ $siteSettings->email }}<br>
                    {{ $siteSettings->customer_care_email }}</p>
                  </div>
  
                  <div class="col-lg-4 info mt-4 mt-lg-0">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>{{ $siteSettings->landline }}<br>
                    {{ $siteSettings->customer_care_phone }}</p>
                  </div>
                </div>
              </div>
  
            </div>
  
        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-10">
              {{-- success --}}
              @if(Session::has('message'))
              <div class="alert alert-success alert-dismissible message">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                {!! Session::get('message') !!}
              </div>
              @endif
  
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                </div><br />
              @endif
              {{-- error message --}}
  
              <form action="{{ route('contact') }}" method="post" role="form" >
                <div class="row mb-2">
                      {{csrf_field()}}
                  <div class="col-md-6 form-group ">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="{{ old('name') }}" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" required>
                  </div>
                </div>
  
                <div class="row mb-2">
                  <div class="col-md-6 form-group">
                    <input type="text" name="subject" class="form-control" id="Subject" placeholder="Subject" value="{{ old('subject') }}" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="number" class="form-control" name="phone" id="number" placeholder="Your Number" value="{{ old('phone') }}" required>
                  </div>
                </div>
                
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required>{{ old('message') }}</textarea>
                </div>
                
                <div class="text-center"><button type="submit" class="btn btn-primary btn-block mt-2">Send Message</button></div>
              </form>
            </div>
  
          </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection