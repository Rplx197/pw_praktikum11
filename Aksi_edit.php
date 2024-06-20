<?php
include "koneksi.php";
// Mendapatkan data dari form
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['Jurusan'];
$alamat = $_POST['alamat'];
// Query update data mahasiswa
$sql = "UPDATE mahasiswa SET nim='$nim', nama= '$nama', no_hp = '$no_hp', jenis_kelamin = '$jenis_kelamiก', Jurusan= '$jurusan', alamat= '$alamat' WHERE id='$id'";
if (mysqli_query($link, $sql)) {
    header("location:tampil_data.php");
}
