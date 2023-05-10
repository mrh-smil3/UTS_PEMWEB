<!DOCTYPE html>
<html>
<head>
	<title>Query Builder Laravel</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<body>

<div class="container-sm">

<form method="POST" action="/jabatan/store">
    @csrf

    
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Nama Jabatan</label>
        <input type="text" class="form-control" name="jabatan" id="" placeholder="Example Manager">
    </div>


    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>