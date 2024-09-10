<?php
if ($_POST) {
    $nama_pegawai = $_POST['nama_pegawai'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_tlp = $_POST['no_tlp'];
    $jabatan = $_POST['jabatan'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi input
    if (empty($nama_pegawai)) {
        echo "<script>alert('Nama pegawai tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif (empty($nik)) {
        echo "<script>alert('NIK tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif (empty($jenis_kelamin)) {
        echo "<script>alert('Jenis kelamin tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif (empty($no_tlp)) {
        echo "<script>alert('No telepon tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif (empty($jabatan)) {
        echo "<script>alert('Jabatan tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('Username tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Password tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } else {
        include "koneksi.php";
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Insert data
        $insert = mysqli_query($conn, "INSERT INTO tabel_pegawai (nama, nik, alamat, jenis_kelamin, no_tlp, jabatan, username, password) VALUES ('$nama_pegawai', '$nik', '$alamat', '$jenis_kelamin', '$no_tlp', '$jabatan', '$username', '$hashed_password')");
        if ($insert) {
            echo "<script>alert('Sukses menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        }
    }
}
?>
