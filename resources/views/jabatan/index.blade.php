@extends('layouts.app')

@extends('layouts.navbar')

@section('content')

@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
<div class="card card-default">
    <div class="card-header">
        <form class="row row-cols-auto g-1">
            <div class="col">
                <input class="form-control" type="text" name="k" value="" placeholder="Search here..." />
            </div>
            <div class="col">
                <button class="btn btn-success">Refresh</button>
            </div>
            <div class="col">
                <a class="btn btn-primary" href="/jabatan/create">Add Jabatan</a>

            </div>
        </form>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
					<th>ID Jabatan</th>
					<th>Nama Jabatan</th>
					<th>Opsi</th>
				</tr>
				@foreach($jabatan as $jb)
				<tr>
					<td>{{ $jb->id }}</td>
					<td>{{ $jb->nama_jabatan }}</td>
					<td>
						<a href="/jabatan/edit/{{ $jb->id }}" class="btn btn-primary btn-sm">Edit</a>
						
						<a href="/jabatan/hapus/{{ $jb->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Hapus</a>
					</td>
				</tr>
            @endforeach
        </table>
    </div>
</div>
@endsection



