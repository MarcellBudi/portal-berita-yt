
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
						<div class="card-title">Form Kategori</div>
                        <a href="{{ route('artikel.index') }}" class="btn btn-warning btn-sm ml-auto">Kembali</a>
					</div>
				</div>
				<div class="card-body">
				
                <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul Artikel</label>
                        <input type="text" name="judul" class="form-control" id="text" placeholder="Enter Judul">
                        
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea type="text" name="body" class="form-control" id="editor"></textarea>
                        
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori_id" class="form-control">
                        @foreach ($kategori as $row)
                        
                            <option value="{{$row->id}}">{{ $row->nama_kategori }}</option>
                        
                        @endforeach
                    </select>
                        
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar Artikel</label>
                        <input type="file" name="gambar_artikel" class="form-control"></input>
                        
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="is_active" class="form-control">
                            <option value="1">Publish</option>
                            <option value="0">Draft</option>
                        </select>
                        
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

				