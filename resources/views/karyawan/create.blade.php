@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('karyawan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Karyawan Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama" value="{{ old('nama') }}" />
            </div>
            <div class="mb-3">
                <label>Alamat <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="alamat" value="{{ old('alamat') }}" />
            </div>
            <div class="mb-3">
                <label>Tanggal Lahir </label>
                <input class="form-control" type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" />
            </div>
            <div class="mb-3">
                <label>Jabatan</label>
                <select name="jabatan_id" id="jabatan_id" class="form-control">
                    <option value="">Pilih Jabatan</option>
                    @foreach($jabatans as $jabatan)
                        <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Save</button>
                <a class="btn btn-danger" href="{{ route('karyawan.index') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection