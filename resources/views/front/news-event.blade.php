@extends('layouts.front-master')
@section('title', 'News Events')
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
            <h2>News Events</h2>
            <ol>
              <li><a href="{{ route('home') }}">Home</a></li>
              <li>News Events</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
    <!-- ======= Services Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
  
            <div class="col-lg-8 entries">
            @forelse ($newsEvents as $newsEvent)
            <article class="entry">
  
                <div class="entry-img">
                  <img src="{{ asset('images/news-event').'/'.$newsEvent->image }}" alt="" class="img-fluid">
                </div>
  
                <h2 class="entry-title">
                  <a href="{{ route('news-event-detail', $newsEvent->slug) }}">{{ $newsEvent->title }} </a>
                </h2>
  
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ route('news-event-detail', $newsEvent->slug) }}">{{ $newsEvent->user->name }}</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('news-event-detail', $newsEvent->slug) }}">
                        <time datetime="2021-01-01">{{ $newsEvent->created_at->format('d M, Y') }}</time>
                    </a></li>
                  </ul>
                </div>
  
                <div class="entry-content">
                  <p>{{ $newsEvent->short_description }}</p>
                  <div class="read-more">
                    <a href="{{ route('news-event-detail', $newsEvent->slug) }}">Read More</a>
                  </div>
                </div>
  
              </article><!-- End blog entry -->
            @empty
                
            @endforelse
  
              <div class="blog-pagination">
                <div class="d-flex justify-content-center">
                    {!! $newsEvents->appends(Request::all())->links() !!}
                </div>
                {{-- <ul class="justify-content-center">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                </ul> --}}
              </div>
  
            </div><!-- End blog entries list -->
  
            <div class="col-lg-4">
  
              <div class="sidebar">
                <h3 class="sidebar-title">Recent Posts</h3>
                <div class="sidebar-item recent-posts">

                  @forelse ($recentNewsEvent as $item)
                  <div class="post-item clearfix">
                    <img src="{{ asset('images/news-event').'/'.$item->image }}" alt="" class="img-fluid">
                    <h4><a href="{{ route('news-event-detail', $item->slug) }}">{{ $item->title }}</a></h4>
                    <time datetime="{{ $item->created_at }}">{{ $item->created_at }}</time>
                  </div>
                  @empty
                      
                  @endforelse
  
                </div><!-- End sidebar recent posts-->
  
  
              </div><!-- End sidebar -->
  
            </div><!-- End blog sidebar -->
  
          </div>
  
        </div>
      </section><!-- End Blog Section -->
      
</main>

@endsection