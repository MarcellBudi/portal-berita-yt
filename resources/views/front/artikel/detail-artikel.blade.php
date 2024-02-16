@extends('front.layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="div">
                <img src="{{asset('uploads/' . $artikel->gambar_artikel)}}" alt="" class="img-fluid">
            </div>
            <div class="detail-content mt-4 p-4">
                <div class="detail-badge">
                    <a href="" class="badge badge-warning">{{$artikel->kategori->nama_kategori}}</a>
                    <a href="" class="badge badge-primary">{{$artikel->users->name}}</a>
                </div>
                <h2>{{$artikel->judul}}</h2>
                <div class="detail-body">
                    <p>
                        {!! $artikel->body !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="detail-sidebar-iklan">
                <h4>{{$iklanA->judul}}</h4>
                <hr>
                <a href=""><img src="{{asset('uploads/' . $iklanA->gambar_iklan)}}" width="450px" alt=""></a>
            </div>
            <div class="detail-sidebar-kategori">
                <h4 class="mt-4">Kategori</h4>
                <hr>
                @foreach ($kategori as $row)    
                <div class="sidebar-kategori d-flex flex-wrap">
                    <a href="" style="text-decoration: none">
                        <p>{{$row->nama_kategori}}</p>
                    </a>
                    <p class="ml-auto text-right"><span class="badge badge-dark">{{$row->artikel->count()}}</span></p>
                </div>
                @endforeach
            </div>

            <div class="detail-sidebar-artikel">
                <h4 class="mt-4">Artikel Terbaru</h4>
                <hr>
                @foreach ($postinganTerbaru as $row)  
                <div class="media mt-3">
                    <img src="{{asset('uploads/' . $row->gambar_artikel)}}" width="80px" class="mr-3" alt="...">
                    <div class="media-body">
                      <h5 class="mt-0">{{$row->judul}}</h5>
                      
                    </div>
                  </div>
                @endforeach
            </div>


        </div>
    </div>
</div>
@endsection

