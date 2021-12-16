@extends('layouts.front-master')
@section('title', 'Catalogs')
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
          <h2>Catalogs</h2>
          <ol>
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="#">Catalogs</a></li>
          </ol>
          </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Catalog Download ======= -->
    <section id="catlog-section" class="catlog-section">
      <div class="container">
        <div class="section-title aos-init aos-animate" data-aos="fade-up">
          <h2>Catalog Downloads</h2>
        </div>
        <div class="row">
            @forelse ($catalogs as $catalog)
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="catalog-img">
                    <?php
                        $ext = pathinfo($catalog->catalog_file, PATHINFO_EXTENSION);
                        if ($ext == 'pdf') { ?>
                            <a href="{{ asset('catalogs').'/'.$catalog->catalog_file }}" class="s-site-btn" target="_blank">
                                <img class="img-responsive" src="{{('assets/img/pdf_file_sample.png')}}" alt=""><br>
                                {{$catalog->title}}
                            </a>
                        <?php }

                        if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png') { ?>
                            <a href="{{ asset('assets/img/catalog.jpg')}}" class="s-site-btn" target="_blank">
                                <img class="img-responsive" src="{{('assets/img/pdf_file_sample.png')}}" alt=""><br>
                                {{$catalog->title}}
                            </a>
                        <?php }
                    ?>
                </div>
              </div>
            @empty
            <div class="catalog-img">
              <p class="text-danger">No Catalog</p>
            </div>
            @endforelse
        
        </div>

      </div>
    </section><!-- Catalog Download -->


  </main><!-- End #main -->
  @endsection