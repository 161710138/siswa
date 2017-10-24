<?php
include ('koneksi.php');
$id 			= $_POST['id'];
$nis 			= $_POST['nis'];
$nama 			= $_POST['nama'];
$jk 			= $_POST['jk'];
$tempat_lahir 	= $_POST['tempat_lahir'];
$tgl_lahir 		= $_POST['tgl_lahir'];
$alamat 		= $_POST['alamat'];
$kelas_id 		= $_POST['kelas_id'];


$edit = "UPDATE siswa SET NIS='$nis', Nama='$nama', Jenis_kelamin='$jk', Tempat_lahir='$tempat_lahir', Tgl_lahir='$tgl_lahir', Alamat='$alamat', kelas_id='$kelas_id' WHERE id='$id'";
mysqli_query($koneksi,$edit);
header("location:lihatdata.php");
?>