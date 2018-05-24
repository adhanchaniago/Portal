<div class="container fluid">
	<h1 align="center">Halaman Tambah User</h1>
	<a href="index.php?page=kategori" class="btn btn-sm btn-warning"> << Kembali ke user management </a>
		<?php
		if (isset($_POST['submit_user'])) {
			$nm_katagori = ($_POST['nm_katagori']);
			$deskerpsi = $_POST['deskerpsi'];

			if (empty($nm_katagori) || empty($deskerpsi)) {
				echo '<div class="warning">Data Tidak Boleh Kosong</div>';
			}else{
				$insert = mysqli_query($koneksi, "INSERT INTO sub_katagori(nm_katagori,deskerpsi) 
					VALUES('$nm_katagori','$deskerpsi')");
				if ($insert) {
					echo '<div class="success">Kategori berhasil disimpan</div>';
				}else{
					echo '<div class="warning">Kategori gagal disiman</div>';
				}
			}
		}
		  ?>
		  <div class="panel-heading">
		  	<form method="post" action="">
		  		<label>Nama kategori</label>
		  		<input type="text" name="nm_katagori" placeholder="" class="form-control">
		  		<br>
		  		<label>Deskripsi Kategori</label>
		  		<input type="text" name="deskerpsi" placeholder="" class="form-control">
		  		<br>
		  		<input type="submit" name="submit_user" value="SIMPAN" class="submit">
		  	</form>
		  </div>
		</div>