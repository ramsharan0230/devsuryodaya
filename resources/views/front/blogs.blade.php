@extends('layouts.front-master')
@section('title', 'Blogs')
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
            <h2>Blogs</h2>
            <ol>
              <li><a href="{{ route('home') }}">Home</a></li>
              <li>Blogs</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
    <!-- ======= Services Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
  
            <div class="col-lg-8 entries">
            @forelse ($blogs as $blog)
            <article class="entry">
  
                <div class="entry-img">
                  <img src="{{ asset('images/blog').'/'.$blog->image }}" alt="" class="img-fluid">
                </div>
  
                <h2 class="entry-title">
                  <a href="blog-inner.php">{{ $blog->title }} </a>
                </h2>
  
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-inner.php">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-inner.php"><time datetime="2021-01-01">Jan 1, 2021</time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-inner.php">12 Comments</a></li>
                  </ul>
                </div>
  
                <div class="entry-content">
                  <p>{{ $blog->short_description }}</p>
                  <div class="read-more">
                    <a href="blog-inner.php">Read More</a>
                  </div>
                </div>
  
              </article><!-- End blog entry -->
            @empty
                
            @endforelse
  
              <div class="blog-pagination">
                <ul class="justify-content-center">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                </ul>
              </div>
  
            </div><!-- End blog entries list -->
  
            <div class="col-lg-4">
  
              <div class="sidebar">
                <h3 class="sidebar-title">Recent Posts</h3>
                <div class="sidebar-item recent-posts">

                  @forelse ($recentBlogs as $item)
                  <div class="post-item clearfix">
                    <img src="{{ asset('images/blog').'/'.$item->image }}" alt="" class="img-fluid">
                    <h4><a href="{{ route('blog-detail', $item->slug) }}">{{ $item->title }}</a></h4>
                    <time datetime="{{ $item->published_date }}">{{ $item->published_date }}</time>
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