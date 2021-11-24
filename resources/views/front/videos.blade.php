@extends('layouts.front-master')
@section('title', 'Videos')
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
            <h2>Videos</h2>
            <ol>
              <li><a href="{{ route('home') }}">Home</a></li>
              <li>Videos</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
    <!-- ======= Services Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-8 entries">
                <div class="row">
                    @forelse ($videos->take(20) as $video)
                        <div class="col-sm-6">
                            <div class="item">
                                <iframe width="100%" padding-right="10px" height="315" src="https://www.youtube.com/embed/{{ $video->link }}" title="YouTube video player" 
                                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <h5>{{ $video->title }}</h5>
                            </div>
                        </div>
                    @empty
                        <div class="MS-content">
                            <p>No vidoe found</p>
                        </div>
                    @endforelse
                </div>
            </div>
  
            <div class="col-lg-4">
              <div class="sidebar">
                <h3 class="sidebar-title">Recent Posts</h3>
                <div class="sidebar-item recent-posts">
                    @forelse ($recentVideos as $recentVideo)
                        <div class="post-item clearfix">
                            <iframe width="100%" padding="1px" src="https://www.youtube.com/embed/{{ $recentVideo->link }}" title="YouTube video player" 
                                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h4><a href="blog-inner.php">{{ $recentVideo->title }}</a></h4>
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