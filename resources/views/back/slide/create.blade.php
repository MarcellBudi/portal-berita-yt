
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
						<div class="card-title">Form Slide Video</div>
                        <a href="{{ route('slide.index') }}" class="btn btn-warning btn-sm ml-auto">Kembali</a>
					</div>
				</div>
				<div class="card-body">
				
                <form action="{{ route('slide.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul Slide</label>
                        <input type="text" name="judul_slide" class="form-control" id="text" placeholder="Enter Judul">
                        
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" name="link" class="form-control" id="text" placeholder="Enter Link"></input>
                        
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar Slide</label>
                        <input type="file" name="gambar_slide" class="form-control"></input>
                        
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
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

				