<!DOCTYPE html>
<html>
<head>
<body bgcolor="salmon">
<a href="lihatdata.php"></a>
  
    <h1>Data Siswa</h1>

        <td><a href='tambah.php?id=$data[id]'>Tambah Data ></a></td>
		<br></br>

<table border="2">
<th>Nomor</th>
<th>NIS</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Alamat</th>
<th>Kelas ID</th>
<th colspan="3">Opsi</th>
<?php

include('koneksi.php');

$ma = mysqli_query($koneksi,"SELECT siswa.id, siswa.NIS, siswa.nama, siswa.jenis_kelamin, siswa.tempat_lahir, siswa.tgl_lahir, siswa.alamat, kelas.kelas as nama_kelas FROM siswa Join kelas on kelas.id = siswa.kelas_id");
$no =1;
foreach ($ma as $data) {
	echo "<tr>
	<td>$no</td>
	<td>".$data['NIS']."</td>
	<td>".$data['nama']."</td>
	<td>".$data['jenis_kelamin']."</td>
	<td>".$data['tempat_lahir']."</td>
	<td>".$data['tgl_lahir']."</td>
	<td>".$data['alamat']."</td>
	<td>".$data['nama_kelas']."</td>
	<td><a href= 'show.php?id=$data[id]'>Show</a></td>
	<td><a href= 'edit.php?id=$data[id]'>Edit</a></td>
	<td><a href= 'delete.php?id=$data[id]'>Delete</a></td>
	</tr>";
     $no++;
 }
	?>
	</center>
</table>
</body>
</html>
