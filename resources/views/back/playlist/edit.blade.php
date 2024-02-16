
@extends('layouts.default')

@section('content')



<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		
	</div>
</div>

<div class="page-inner mt--5">

	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Playlist Video {{ $playlist->judul_playlist }}</div>
                        <a href="{{ route('playlist.index') }}" class="btn btn-warning btn-sm ml-auto">Kembali</a>
					</div>
				</div>
				<div class="card-body">
				
                <form action="{{ route('playlist.update', $playlist->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="judul">Playlist Video</label>
                        <input type="text" name="judul_playlist" value="{{$playlist->judul_playlist}}" class="form-control" id="text" placeholder="Enter Playlist">
                        
                    </div>
                    <div class="form-group">
                        <label for="body">Deskripsi</label>
                        <textarea type="text" name="deskripsi" id="editor" class="form-control" id="text">{{$playlist->deskripsi}}</textarea>
                        
                    </div>
                    
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="is_active" class="form-control">
                            <option value="1" {{$playlist->is_active== '1' ? 'selected' : ''}} >Publish</option>
                            <option value="0" {{$playlist->is_active== '0' ? 'selected' : ''}}>Draft</option>
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar Playlist</label>
                        <input type="file" name="gambar_playlist" class="form-control"></input>
                        <br>
                        <label for="gambar">Gambar Saat Ini</label><br>
                        <img src="{{asset('uploads/' . $playlist->gambar_playlist)}}" width="100" alt="">
                        
                    </div>
                    
                    
                    <div class="form-group">
                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                    <button class="btn btn-danger btn-sm" type="reset">Reset</button>
                    </div>
                </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

				