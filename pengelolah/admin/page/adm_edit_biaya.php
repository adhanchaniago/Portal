<div class="container fluid">
	<h1 align="center">MANAJEMAN Informasi Toure</h1>
	<a href="index.php?page=harga" class="btn btn-sm btn-warning"> << Kembali ke user management </a>
		<?php
	if(isset($_POST['edit_harga'])){
			$tujuan = $_POST['tujuan'];
			$harga = ($_POST['harga']);
			if(empty($tujuan)){
				echo '<div class="warning">Data tidak boleh kosong</div>';
			}else{
				$edit = mysqli_query($koneksi, "UPDATE biaya SET harga='$harga' WHERE jumlah_hari='$tujuan'");
				}
				if($edit){
					echo'<div class="success">kategori berhasil diedit</div>';
				}else{
					echo '<div class="error">kategori gagal diedit</div>';
				}
			}
		
		$id_biaya = $_GET['id'];
		$sql = mysqli_query($koneksi, "SELECT * FROM biaya order by id_biaya");
		$result=mysqli_fetch_array($sql);
		
		?>	
		  <div class="panel-heading">
		  	<form method="post" action="">
		  		<label>Nama Tujuan</label>
		  		<input type="text" name="tujuan" placeholder="" class="form-control" value="<?php echo $result['tujuan'];?>">
		  		<br>
		  		<label>Jumlah Hari</label>
		  		<input type="text" name="jumlah_hari" placeholder="" class="form-control" value="<?php echo $result['jumlah_hari'];?>">
		  		<br>
		  		<label>Biaya</label>
		  		<input type="text" name="harga" placeholder="" class="form-control" value="<?php echo $result['harga'];?>">
		  		<br>
		  		<input type="submit" name="edit_harga" value="EDIT" class="submit">
		  	</form>
		  </div>
		</div>