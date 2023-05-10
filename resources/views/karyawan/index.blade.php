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
                <input class="form-control" type="text" name="k" value="{{ $k }}" placeholder="Search here..." />
            </div>
            <div class="col">
                <button class="btn btn-success">Refresh</button>
            </div>
            <div class="col">
                <a class="btn btn-primary" href="{{ route('karyawan.create') }}">Add</a>
            </div>
        </form>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Karyawan Name</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Jabatan ID</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($karyawans as $karyawan)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $karyawan->nama }}</td>
                <td>{{ $karyawan->alamat }}</td>
                <td>{{ $karyawan->tanggal_lahir }}</td>
                <td>{{ $karyawan->jabatan_id }}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('karyawan.edit', $karyawan) }}">Edit</a>
                    <form method="POST" action="{{ route('karyawan.destroy', $karyawan) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection