<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">{{ $siteSettings->email }}</a></i>
      <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{ $siteSettings->landline }}</span></i>
    </div>
    <div class="social-links d-none d-md-flex align-items-center">
      <a href="{{ $siteSettings->twiter }}" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="{{ $siteSettings->facebook }}" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="{{ $siteSettings->instagram }}" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="{{ $siteSettings->linkedin }}" target="_blank" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
    </div>
  </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
  <div class="container d-flex justify-content-between">

    <div class="logo">
      <!-- <h1 class="text-light"><a href="index.html">Suryodaya</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{ route('home') }}"><img src="{{asset('/assets/img/logo.jpeg')}}" alt="" class="img-fluid"></a>
    </div>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="active" href="{{ route('home') }}">Home</a></li>
        <li class="dropdown"><a href="{{ route('products') }}"><span>Products</span></a>
          <ul>
            @foreach ($categories as $category)
            <li class="dropdown"><a href="{{ route('productBycategory', $category->slug) }}"><span> {{ $category->name}} </span> <i class="bi bi-chevron-right"></i></a>
              @if(count($category->subcategories) > 0)
              <ul>
                @foreach ($category->subcategories as $subcategory)
                <li class="dropdown"><a href=" {{ route('productBySubcategory', $subcategory->slug) }}"><span> {{ $subcategory->name}} </span><i class="bi bi-chevron-right"></i></a>
                  @if(count($subcategory->products) > 0)
                  <ul>
                    @foreach ($subcategory->products as $product)
                    <li><a href="{{ route('product-detail', $product->slug) }}">{{$product->title}}</a>
                    </li>
                    @endforeach
                  </ul>
                  @endif
                  @endforeach
              </ul>
              @endif
            </li>
            @endforeach

          </ul>
        </li>
        <li class=" dropdown"><a href="{{ route('services') }}"><span>Services</span></a>
          <ul>
            @forelse ($mainServices as $service)
            <li><a href="{{ route('service-detail', $service->slug) }}">{{ $service->title }}</a></li>
            @empty

            @endforelse

          </ul>
        </li>
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('news-event') }}">News & Event</a></li>

        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li>
          <div class="form">
            <form action="{{ route('product-search') }}" method="GET">
              <div class="input-group ts-bar">
                <input type="text" class="form-control" placeholder="Search product.." name="search" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-primary" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
              </div>
            </form>
          </div>

        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->