<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> 
</head>

<body>

<div class="container">
    <h1 class="mt-4 mb-4">Tambah Mahasiswa</h1>
    <form method="POST" action="aksi_simpan.php">
    <div class="mb-3">
  <label for="nim" class="form-label">Nim</label>
  <input type="text" class="form-control" id="nim" name="nim" required>
</div>

<div class="mb-3">
  <label for="nama" class="form-label">Nama</label>
  <input type="text" class="form-control" id="nama" name="nama" required>
</div>

<div class="mb-3">
  <label for="no_hp" class="form-label">No HP</label>
  <input class="form-control" id="no_hp" name="no_hp" required>
</div>

<div class="mb-3">
  <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
  <select type="form-select" class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
    <option value="Laki-laki">Laki-laki</option>
    <option value="Perempuan">Perempuan</option>
</select>
</div>  

    <div class="mb-3">
  <label for="jurusan" class="form-label">Jurusan</label>
  <select class="form-select" id="jurusan" name="jurusan">
    <option value="Informatika">Informatika</option>
    <option value="Sistem informasi">Sistem informasi</option>
    </select>
   </div>  

    <div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
</div>
<button type="submit" class="btn btn-primary">Simpan</button>
<a href="tampil_data.php" class="btn btn-secondary">Kembali</a>
</form>
</div>
</div>  
</body>
</html>