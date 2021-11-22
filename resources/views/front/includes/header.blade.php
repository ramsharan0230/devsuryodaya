<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
      <i class="bi bi-phone d-flex align-items-center ms-4"><span>+977 89 55488 55</span></i>
    </div>
    <div class="social-links d-none d-md-flex align-items-center">
      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
    </div>
  </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
  <div class="container d-flex justify-content-between">

    <div class="logo">
      <!-- <h1 class="text-light"><a href="index.html">Suryodaya</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.php"><img src="assets/img/logo.jpeg" alt="" class="img-fluid"></a>
    </div>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li class="dropdown"><a href="products.php"><span>Products</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            @foreach ($categories as $category)
            <li class="dropdown"><a href="#"><span> {{ $category->name}} </span> <i class="bi bi-chevron-right"></i></a>
              @if(count($category->subcategories) > 0)
              <ul>
                @foreach ($category->subcategories as $subcategory)
                  <li><a href="#">{{ $subcategory->name}}</a></li>
                @endforeach
              </ul>
              @endif
            </li>
            @endforeach
            
          </ul>
        </li>
        <li class="dropdown"><a href="service.php"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Suction Therapy</a></li>
            <li><a href="#">Aerosal Tharapy</a></li>
            <li><a href="#">CPAP Tharapy</a></li>
            <li><a href="#">Ventilation Tharapy</a></li>
            <li><a href="#">Diagnostiscs</a></li>
          </ul>
        </li>
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('blogs') }}">Blog</a></li>
        
        <li><a href="{{ route('blogs') }}">Contact</a></li>
         <li><div class="input-group ts-bar">
        <input type="text" class="form-control" placeholder="Search product.." aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
      </div></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->