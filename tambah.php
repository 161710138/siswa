<h1 align="center">Input Biodata Siswa</h1>
<fieldset style="width: 50%; margin: auto;">
<body bgcolor="salmon">	
<legend>Form Input Biodata Siswa</legend>

	<form action="tambahpro.php" method="post">
       <p>
	        NIS <br />
			<input type="text" name="nis" required />
		</p>
		<p>
			Nama<br />
			<input type="text" name="nama" required>
		</p>
		<p>
		     Jenis Kelamin<br />
			<input type="radio" name="jk" value="Laki-laki"> Laki-laki 
			<input type="radio" name="jk" value="Perempuan"> Perempuan
		<p>
		     Tempat Lahir<br />
			<input type="text" name="tempat_lahir" required />
		</p>
		<p>
		     Tanggal Lahir<br />
			<input type="date" name="tgl_lahir" required />
		</p>
		<p>

		     Alamat<br />
			<input type="text" name="alamat" required />
		</p>
			 <p>
			 Kelas ID <br />
			<?php
			include ('koneksi.php');
			$kls = mysqli_query($koneksi, "SELECT * FROM kelas");?>
				<select name="kelas_id">
				<option>-</option>
				<?php
					foreach ($kls as $data) {
						?>
				<option value="<?php echo $data['id'];?>"><?php
					echo $data['kelas']?></option>
				<?php
				}?>			
					
				</select>
		</p>
		
		   
		<p>
			<input type="submit" value="simpan" />
			<input type="reset" value="reset" onclick="return confirm('hapus data yang telah diinput')">
			</p>
		</form>
		</fieldset>
        <br />
	    <center><a href="lihatdata.php">&Lt; Tabel Biodata Kelas</a></center>