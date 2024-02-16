
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
						<div class="card-title">Edit Iklan {{ $iklan->judul }}</div>
                        <a href="{{ route('iklan.index') }}" class="btn btn-warning btn-sm ml-auto">Kembali</a>
					</div>
				</div>
				<div class="card-body">
				
                <form action="{{ route('iklan.update', $iklan->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="judul">Judul Iklan</label>
                        <input type="text" name="judul" value="{{$iklan->judul}}" class="form-control" id="text" placeholder="Enter judul">
                        
                    </div>

                    <div class="form-group">
                        <label for="judul">Link Iklan</label>
                        <input type="text" name="link" value="{{$iklan->link}}" class="form-control" id="text" placeholder="Enter Link">
                        
                    </div>

                    
                    
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="1" {{$iklan->status== '1' ? 'selected' : ''}} >Publish</option>
                            <option value="0" {{$iklan->status== '0' ? 'selected' : ''}}>Draft</option>
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar Iklan</label>
                        <input type="file" name="gambar_iklan" class="form-control"></input>
                        <br>
                        <label for="gambar">Gambar Saat Ini</label><br>
                        <img src="{{asset('uploads/' . $iklan->gambar_iklan)}}" width="100" alt="">
                        
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

				