<!DOCTYPE html>
<html>
<head>
    <title>Siswa</title>
</head>
<body bgcolor="salmon">
    <?php
    include('koneksi.php');
    $id = $_GET['id'];
    $hy = mysqli_query($koneksi,"SELECT * FROM siswa WHERE id='$id'");
    $data = mysqli_fetch_array($hy);
    ?>
    <center><h3>Edit Data Siswa</h3></center>
    <fieldset style="width: 50%; margin: auto;">
    <legend>Form Edit Biodata Siswa</legend>
        <form action="simpanedit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
        <p>
        Nomor Induk Siswa <br/>
        <input type="text" name="nis" value="<?php echo $data['NIS'];?>" required />
    </p>
    
    <p>
        Nama <br/>
        <input type="text" name="nama" value="<?php echo $data['nama'];?>" required />
    </p>
    <p>
        Jenis Kelamin <br/>
        <input type="radio" name="jk"  value="Perempuan" <?php if ($data['jenis_kelamin'] == 'Perempuan') echo"checked='checked'"; ?> />Perempuan 
        <input type="radio" name="jk"  value="Laki-Laki" <?php if ($data['jenis_kelamin'] == 'Laki-Laki') echo"checked='checked'"; ?> />Laki-Laki 
        
    <p>
        Tempat Lahir <br/>
        <input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir'];?>" required />
    </p>
    <p>
        Tanggal Lahir<br/>
        <input type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir'];?>" required />
    </p>
    <p>
        Alamat <br/>
        <textarea name="alamat" cols="50 required"><?php echo $data['alamat'];?></textarea>
    </p>
    <p>
        <label>Kelas id</label>
        
        <?php
        include('koneksi.php');
        $ws = mysqli_query($koneksi,"SELECT * FROM kelas");
        ?>
        <select name="kelas_id">
          <option>-</option>
          <?php
          foreach ($ws as $data) {
          ?>
          <option value="<?php echo $data['id']  ?>"> <?php echo $data['kelas']?> </option>
          <?php
          }  ?>
        </select>
    </p>
        <p>
            <input type="submit" value="Simpan" />
        </p>
        </form>
    </fieldset>
    <br /><center><a href="lihatdata.php" class="btn btn-primary">&Lt; Lihat Data</a></center>
</body>
</html>