{{-- <!DOCTYPE html>
<html>
<head>
	<title>Query Builder Laravel</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<body>

<div class="container-sm">

@foreach($jabatan as $jb)
<form method="POST" action="/jabatan/update">
    @csrf

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">ID Jabatan</label>
        <input type="text" class="form-control" name="id" disabled id="" value="{{$jb->id_jabatan}}" >
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Nama Jabatan</label>
        <input type="text" class="form-control" name="jabatan" id="" value="{{$jb->nama_jabatan}}" >
    </div>


    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endforeach

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html> --}}


<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>
 
	<a href="/jabatan"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($jabatan as $p)
	<form action="/jabatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Nama Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->nama_jabatan }}"> <br/>
		
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>