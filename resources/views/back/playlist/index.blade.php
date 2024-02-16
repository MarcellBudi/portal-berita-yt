
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
						<div class="card-title">Data Playlist</div>
                        <a href="{{ route('playlist.create') }}" class="btn btn-primary btn-sm ml-auto"><i class="fas fa-plus"> Tambah Playlist</i></a>
					</div>
				</div>
				<div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-primary">
                            {{ Session('success') }}
                        </div>
                    @endif
					<div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Playlist Video</th>
                                <th>Slug</th>
                                <th>Author</th>
                                <th>Status</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($playlist as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->judul_playlist }}</td>
                                <td>{{ $row->slug }}</td>
                                <td>{{ $row->users->name }}</td>
                                <td>
                                    @if ($row->is_active == '1')
                                        Active
                                    @else
                                        Draft
                                    @endif
                                </td>
                                <td>
                                    <img src="{{asset('uploads/' . $row->gambar_playlist)}}" width="100" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('playlist.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i></a>

                                    <form action="{{ route('playlist.destroy', $row->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">Data Masih Kosong</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

				