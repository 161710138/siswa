<!DOCTYPE html>
<html>
<head>
    <title>Siswa</title>
</head>
<body  bgcolor="salmon">
    <?php
    include('koneksi.php');
    $id = $_GET['id'];
    $ku = mysqli_query($koneksi,"SELECT siswa.id, siswa.NIS, siswa.Nama , siswa.Jenis_kelamin, siswa.Tempat_lahir, siswa.Tgl_lahir, siswa.Alamat, kelas.kelas as nama_kelas FROM siswa Join kelas on kelas.id = siswa.kelas_id WHERE siswa.id='$id'");
    $data = mysqli_fetch_array($ku);
    ?>
    <center><h3>Show Data Siswa</h3></center>
    <fieldset style="width: 50%; margin: auto;">
    <legend>Form Show Biodata Siswa</legend>
        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
    <p>
        Nomor Induk Siswa <br/>
        <input type="text" value="<?php echo $data['NIS'];?>" readonly />
    </p>
    
    <p>
        Nama <br/>
        <input type="text" value="<?php echo $data['Nama'];?>" readonly  />
    </p>
    <p>
        Jenis Kelamin <br/>
        <input type="radio" name="jk"  value="Perempuan" <?php if ($data['Jenis_kelamin'] == 'Perempuan') echo"checked='checked'"; ?> />Perempuan 
        <input type="radio" name="jk"  value="Laki-Laki" <?php if ($data['Jenis_kelamin'] == 'Laki-Laki') echo"checked='checked'"; ?> />Laki-Laki 
            <p>
        Tempat Lahir <br/>
        <input type="text" value="<?php echo $data['Tempat_lahir'];?>" readonly  />
    </p>
    <p>
        Tanggal Lahir<br/>
        <input type="date" value="<?php echo $data['Tgl_lahir'];?>" readonly  />
    </p>
    <p>
        Alamat <br/>
        <textarea name="alamat" cols="50 readonly "><?php echo $data['Alamat'];?></textarea>
    </p>
    <p>
        Kelas id <br />
       <input type="text" value="<?php echo $data['nama_kelas'];?>" readonly  />
    </p>
    </fieldset>
    <br /><center><a href="lihatdata.php" class="btn btn-primary">&Lt; Lihat Data</a></center>
</body>
</html>