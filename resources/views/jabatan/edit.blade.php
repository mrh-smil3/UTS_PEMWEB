@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        
        @foreach ($jabatan as $jb)
        <form action="/jabatan/update" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
                
                <input type="hidden"  name="id" value="{{ $jb->id }}">
                <span></span>
            </div>
            <div class="mb-3">
                <label>Nama Jabatan <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_jabatan" value="{{ $jb->nama_jabatan }}" />
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Save">
                <a class="btn btn-danger" href="/jabatan">Back</a>
            </div>
        </form>
        @endforeach
    </div>
</div>
@endsection