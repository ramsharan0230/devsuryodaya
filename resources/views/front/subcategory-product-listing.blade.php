
@extends('layouts.front-master')
@section('title', $subcategory->name )

@section('content')
    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
            <h2>{{ $subcategory->name }}</h2>
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('productBycategory', $subcategory->category->slug) }}">{{$subcategory->category->slug}}</a></li>
                <li><a href="#">{{ $subcategory->name }}</a></li>
            </ol>
            </div>

        </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= oxygen-section ======= -->
        <section id="oxygen-section" class="oxygen-section">
        <div class="container">
            <div class="section-title aos-init aos-animate" data-aos="fade-up">
            <h2>{{ $subcategory->name }} </h2>
            </div>
            <div class="row">
                @forelse ($productsByCat as $product)
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="listing-items hoverable" data-aos="fade-up">
                    <a href="{{ route('product-detail', $product->slug) }}"> <img src="{{ asset('images/product').'/'.$product->image }}"></a>
                    <h4 class="title"><a href="{{ route('product-detail', $product->slug) }}">{{ $product->title }}</a></h4>
                    <strong>{{ $product->subtitle }}</strong>
                    <p class="description">{{ $product->short_description }}</p>
                    </div>
                </div>
                @empty
                    <p>No product found</p>
                @endforelse
                
            </div>

        </div>
        </section><!-- oxygen-section -->

    </main><!-- End #main -->   
@endsection          