<div id="exampleSlider">
    <div class="MS-content">
        @forelse ($mainVideos->take(4) as $video)
        <div class="item">
            <iframe width="100%" padding-right="10px" height="315" src="https://www.youtube.com/embed/{{ $video->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <button class="video-btn" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/{{ $video->link }}" data-bs-target="#myModal">
            <i class="bi bi-play-circle-fill"></i>
           </button>
        </div>
        
        @empty
            
        @endforelse
    
    </div>
    <div class="MS-controls">
        <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
        <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
    </div>
</div>