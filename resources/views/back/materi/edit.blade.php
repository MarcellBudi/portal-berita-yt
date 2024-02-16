
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
						<div class="card-title">Edit Materi {{ $materi->judul_materi }}</div>
                        <a href="{{ route('materi.index') }}" class="btn btn-warning btn-sm ml-auto">Kembali</a>
					</div>
				</div>
				<div class="card-body">
				
                <form action="{{ route('materi.update', $materi->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="judul">Judul Materi</label>
                        <input type="text" name="judul_materi" value="{{$materi->judul_materi}}" class="form-control" id="text" placeholder="Enter Materi">
                        
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea type="text" name="deskripsi" id="editor" class="form-control" id="text">{{$materi->deskripsi}}</textarea>
                        
                    </div>

                    <div class="form-group">
                        <label for="kategori">Playlist</label>
                        <select name="playlist_id" class="form-control">
                        @foreach ($playlist as $row)

                        @if ($row->id == $materi->playlist_id)
                            <option value={{$row->id}} selected='selected'>{{ $row->judul_playlist }}</option>
                       
                        @else
                            <option value="{{$row->id}}">
                                {{ $row->judul_playlist }}
                            </option>

                        @endif
                        @endforeach
                    </select>
                        
                    </div>
                    
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="is_active" class="form-control">
                            <option value="1" {{$materi->is_active== '1' ? 'selected' : ''}} >Publish</option>
                            <option value="0" {{$materi->is_active== '0' ? 'selected' : ''}}>Draft</option>
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar Playlist</label>
                        <input type="file" name="gambar_materi" class="form-control"></input>
                        <br>
                        <label for="gambar">Gambar Saat Ini</label><br>
                        <img src="{{asset('uploads/' . $materi->gambar_materi)}}" width="100" alt="">
                        
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

				