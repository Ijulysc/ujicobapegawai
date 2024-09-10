<?php
if ($_POST) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_tlp = $_POST['no_tlp'];
    $jabatan = $_POST['jabatan'];
    $password = $_POST['password'];

    // Validasi input
    if (empty($nama)) {
        echo "<script>alert('Nama pegawai tidak boleh kosong');location.href='ubah_pegawai.php?id=".$id."';</script>";
    } elseif (empty($nik)) {
        echo "<script>alert('NIK tidak boleh kosong');location.href='ubah_pegawai.php?id=".$id."';</script>";
    } elseif (empty($no_tlp)) {
        echo "<script>alert('No Telepon tidak boleh kosong');location.href='ubah_pegawai.php?id=".$id."';</script>";
    } else {
        include "koneksi.php";
        if (empty($password)) {
            // Update tanpa mengubah password
            $update = mysqli_query($conn, "UPDATE tabel_pegawai SET nama='".$nama."', nik='".$nik."', alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', no_tlp='".$no_tlp."', jabatan='".$jabatan."' WHERE id='".$id."'") or die(mysqli_error($conn));
        } else {
            // Update dengan mengubah password
            $update = mysqli_query($conn, "UPDATE tabel_pegawai SET nama='".$nama."', nik='".$nik."', alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', no_tlp='".$no_tlp."', jabatan='".$jabatan."', password='".md5($password)."' WHERE id='".$id."'") or die(mysqli_error($conn));
        }

        if ($update) {
            echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?id=".$id."';</script>";
        }
    }
}
?>
