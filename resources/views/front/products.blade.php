@extends('layouts.front-master')
@section('title', 'Products')
@section('styles')
<style>
  .ArticleBody {
    font-weight: bold
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
        @forelse ($products as $item)
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <div class="hovereffect">
            <img class="img-responsive" src="{{ asset('images/product').'/'.$item->image }}" alt="">
            <div class="overlay">
              <h2>{{ $item->title}}</h2>
              <a class="info" href="{{ route('product-detail', $item->slug ) }}">Know More</a>
            </div>
          </div>
        </div>
        @empty
        <h2>No product found</h2>
        @endforelse

      </div>

    </div>
  </section><!-- Catalog Download -->


</main><!-- End #main -->
@endsection