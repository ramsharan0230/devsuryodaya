<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Suryodaya Inc. </h3>
          <p>
            {{$siteSettings->address}} <br>
            {{$siteSettings->location}}
            <br><br>
            <strong>Phone:</strong> {{ $siteSettings->landline }}<br>
            <strong>Email:</strong> {{ $siteSettings->email  }}<br>
          </p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('products') }}">Products</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('catalog') }}">Catalogs</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('services') }}">Services</a></li>
            {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> --}}
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            @forelse ($mainServices as $service)
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('service-detail', $service->slug) }}">{{ $service->title }}</a></li>
            @empty
            <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">No Service Found</a></li> -->
            @endforelse
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>You Can Sign Up For Our Mailing List Here.</h4>
          <p>Sign up to receive email updates on new Products, Events, Announcements, Special Promotion, Sales and More</p>
          @if(Session::has('message'))
          <div class="alert alert-success alert-dismissible message">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            {!! Session::get('message') !!}
          </div>
          @endif

          <form action="{{ route('subscription') }}" method="post">
            {{csrf_field()}}
            <input type="email" name="email" placeholder="Enter your mail ..."><input type="submit" value="Subscribe">
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">

    <div class="me-md-auto text-center text-md-start">
      <div class="copyright">
        2021 &copy; Copyright <strong><span>Suryodaya Inc. Pvt. Ltd.</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a target="_blank" href="https://www.itconcerns.com.np/">IT Concerns</a>
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="{{ $siteSettings->twiter }}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="{{ $siteSettings->facebook }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="{{ $siteSettings->instagram }}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="{{ $siteSettings->linkedin }}" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>