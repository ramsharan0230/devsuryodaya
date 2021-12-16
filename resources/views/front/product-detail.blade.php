@extends('layouts.front-master')
@section('title', $product->title)
@push('styles')
<style>
    .course-title {
        display: flex;
        justify-content: center;
        font-weight: bold;
        font-size: 34px;
        color: #000;
        margin: 50px;
    }

    ul {
        list-style: none;
    }

    .image-gallery {
        /* max-width: 320px;
        margin: 10px auto; */
        margin-bottom: 15px;
        width: 100%;
    }

    .image-gallery img {
        width: 100%;
        height: auto;
        display: block;
        border: 4px solid #ededed;
        box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);
    }

    ul.thumbnails {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    ul.thumbnails li {
        margin: 0 10px;
    }

    ul.thumbnails li a img {
        border: 4px solid #ededed;
        box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);
        max-width: 115px;
    }
</style>
@endpush
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
                        <div>
                            <div class="image-gallery">
                                <img src="{{ asset('images/product').'/'.$product->image }}" alt="">
                            </div>
                            <ul class="thumbnails">
                                @forelse ($product->galleries as $gallery)
                                    <li><a href="{{ asset('images/product_gallery').'/'.$gallery->image }}"><img src="{{ asset('images/product_gallery').'/'.$gallery->image }}" alt=""></a></li>
                                @empty
                                    <p>No more picture</p>
                                @endforelse
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    <div class="items-detail " data-aos="fade-up">
                        <strong>{{ $product->subtitle }}</strong>
                        <p class="description">{{ $product->short_description }}</p>
                        <p class="description">{!! $product->description !!}</p>
                    </div>

                    @if($product->catalog !=null)
                    <div class="alert alert-secondary" role="alert">
                        <div class="row">
                            <div class="col-sm-8">
                                <span>{{ $product->catalog->title }}</span>
                            </div>
                            <div class="col-sm-4">
                                <b>
                                    <a href="{{ asset('catalogs').'/'.$product->catalog->catalog_file }}" target="_blank" class="btn btn-secondary btn-sm float-end"><i class="fa fa-eye"></i> View</a>
                                </b>
                            </div>
                        </div>
                    </div>
                    @endif



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
@push('scripts')
<script>
    $(document).ready(function() {
        $('.thumbnails a').click(function(e) {
            e.preventDefault();
            $('.image-gallery img').attr('src', $(this).attr('href'));
        })
    });
</script>
@endpush