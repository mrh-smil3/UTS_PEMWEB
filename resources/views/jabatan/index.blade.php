<!DOCTYPE html>
<html>
<head>
	<title>Query Builder Laravel</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<body>

<div class="container-sm">
	<h2>KANTOR A</h2>
	<h3>Data Jabatan</h3>
 
	<a href="/jabatan/tambah" class="btn btn-success"  > + Tambah Jabatan</a>

<div class="text-center">
  <a href="/jabatan/tambah" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalSubscriptionForm">Launch
    Modal Subscription Form</a>
</div>
	
	<br/>
	<br/>

	<table class="table table-striped">
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
				
				<a href="/jabatan/hapus/{{ $jb->id }}" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>