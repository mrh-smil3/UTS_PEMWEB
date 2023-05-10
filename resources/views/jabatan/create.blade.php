@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="/jabatan/store" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Nama Jabatan</label>
              <input type="text" class="form-control" name="jabatan" id="" placeholder="Example Manager">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Save</button>
                <a class="btn btn-danger" href="/jabatan">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection