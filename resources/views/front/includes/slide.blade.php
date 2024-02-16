<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        @foreach ($slide as $key=>$row)
          <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
            <img src="{{asset('uploads/' . $row->gambar_slide)}}" class="d-block w-100" alt="...">
          </div>
        @endforeach
        
        
      </div>
     <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
</div>