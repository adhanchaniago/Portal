<div class="container fluid">
	<h1 align="center">MANAJEMAN Informasi Toure</h1>
	<a href="index.php?page=harga" class="btn btn-sm btn-warning"> << Kembali ke user management </a>
		<?php
		if (isset($_POST['submit_harga'])) {
			$tujuan = ($_POST['tujuan']);
			$jumlah_hari = $_POST['jumlah_hari'];
			$harga = $_POST['harga'];

			if (empty($tujuan) || empty($jumlah_hari)|| empty($harga)) {
				echo '<div class="warning">Data Tidak Boleh Kosong</div>';
			}else{
				$insert = mysqli_query($koneksi, "INSERT INTO biaya(tujuan,jumlah_hari,harga) 
					VALUES('$tujuan','$jumlah_hari','$harga')");
				if ($insert) {
					echo '<div class="success">Harga berhasil disimpan</div>';
				}else{
					echo '<div class="warning">Harga gagal disiman</div>';
				}
			}
		}
		  ?>
		  <div class="panel-heading">
		  	<form method="post" action="">
		  		<label>Nama Tujuan</label>
		  		<input type="text" name="tujuan" placeholder="" class="form-control">
		  		<br>
		  		<label>Jumlah Hari</label>
		  		<input type="text" name="jumlah_hari" placeholder="" class="form-control">
		  		<br>
		  		<label>Biaya</label>
		  		<input type="text" name="harga" placeholder="" class="form-control">
		  		<br>
		  		<input type="submit" name="submit_harga" value="TAMBAH" class="submit">
		  	</form>
		  </div>
		</div>