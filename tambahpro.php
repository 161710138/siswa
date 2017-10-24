<?php
include('koneksi.php');

$NIS	           = $_POST['nis'];
$Nama              = $_POST['nama'];
$Jenis_Kelamin     = $_POST['jk'];
$Tempat_Lahir      = $_POST['tempat_lahir'];
$Tgl_Lahir         = $_POST['tgl_lahir'];
$Alamat			   = $_POST['alamat'];
$Kelas_ID          = $_POST['kelas_id'];

$tambah = "INSERT INTO siswa SET NIS='$NIS', nama='$Nama', jenis_kelamin='$Jenis_Kelamin', tempat_lahir='$Tempat_Lahir', tgl_lahir='$Tgl_Lahir', alamat='$Alamat', kelas_id='$Kelas_ID'";
mysqli_query($koneksi,$tambah);
header("location:lihatdata.php");
?>






