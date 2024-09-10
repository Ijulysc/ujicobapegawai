<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Pegawai</title>
</head>
<body>
    <div class="container mt-5">
        <h3>Tambah Pegawai</h3>
        <form action="proses_tambah_pegawai.php" method="post">
            <div class="mb-3">
                <label for="nama_pegawai" class="form-label">Nama Pegawai:</label>
                <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK:</label>
                <input type="text" id="nik" name="nik" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea id="alamat" name="alamat" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="no_tlp" class="form-label">No. Telepon:</label>
                <input type="text" id="no_tlp" name="no_tlp" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <textarea id="jabatan" name="jabatan" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Tambah Pegawai</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
