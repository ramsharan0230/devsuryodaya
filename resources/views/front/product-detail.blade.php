@extends('layouts.front-master')
@section('title', $product->title)

@section('content')
<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Product Detail</h2>
          <ol>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>{{$product->title}}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <section id="oxygen-section" class="oxygen-section">
        <div class="container">
        <div class="section-title aos-init aos-animate" data-aos="fade-up">
            <h2>{{$product->title}}</h2>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="items-detail " data-aos="fade-up">
                <img src="{{ asset('images/product').'/'.$product->image }}">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
            <div class="items-detail " data-aos="fade-up">
                <strong>{{ $product->subtitle }}</strong>
                <p class="description">{{ $product->short_description }}</p>
                <p class="description">{!! $product->description !!}</p>
            </div>

            @forelse ($product->catalogs as $catalog)
            <div class="alert alert-secondary" role="alert">
                <div class="row">
                    <div class="col-sm-8">
                        <span>{{ $catalog->title }}</span>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ $catalog->catalog_file }}" download class="btn btn-secondary btn-sm float-end"><i class="fa fa-download"></i> Download</a>
                    </div>
                </div>
            </div>
            @empty
                
            @endforelse
            


            {{-- <div class="table-div" data-aos="fade-up">
                <strong>Product Varients</strong>
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Item Number</th>
                    <th scope="col">Product</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($varients as $item)
                    <tr>
                        <td>{{$item->price}}</td>
                        <td>{{$item->title }}</td>
                    </tr>
                    @empty
                        
                    @endforelse
                    
                </tbody>
                </table>
            </div> --}}
            {{-- <div class="table-div" data-aos="fade-up">
                <strong>Technical Data</strong>
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Parameter</th>
                    <th scope="col">Product Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tech_details as $detail)
                    <tr>
                        <td>{{$detail->price}}</td>
                        <td>{{$detail->title }}</td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>
                </table>
            </div> --}}
            </div>
        </div>
        </div>
    </section><!-- oxygen-section -->
</main>
  @endsection